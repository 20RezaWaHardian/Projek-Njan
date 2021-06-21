<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SW;
use App\IW;
use App\Klaim;
use App\Keuangan;
use App\Korban;
use App\Imports\SwImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;


class SwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sw=SW::all();
        return view('sw.dataSw', compact('sw'));
    }

    public function iwIndex()
    {
        $iw=IW::all();
        return view('iw.dataIw', compact('iw'));
    }

    public function klaimIndex()
    {
        $klaim=Klaim::all();
        return view('klaim.klaim', compact('klaim'));
    }

    public function uangIndex()
    {
        $uang=Keuangan::all();
        return view('keuangan.keuangan', compact('uang'));
    }
    
    public function korbanIndex()
    {
        $korban=Korban::all();
        return view('korban.korban', compact('korban'));
    }

    public function addKorban()
    {
        return view('korban.tambahKorban');
    }

    public function add()
    {
        return view('form.tambah');
    }

    public function swShow()
    {
        $sw = SW::where('status','baru')->first();
        return view('sw.showSW', compact('sw'));
    }

    public function iwShow()
    {
        $iw = IW::where('status','baru')->first();
        return view('iw.showIW', compact('iw'));
    }

    public function klaimShow()
    {
        $klaim = Klaim::where('status','baru')->first();
        $tahun_korban=date('Y');
                
                $korban_mg=Korban::where('created_at','like',$tahun_korban.'%')->where('kasus','meninggal')->sum('jumlah');
                $korban_lk=Korban::where('created_at','like',$tahun_korban.'%')->where('kasus','luka-luka')->sum('jumlah');

        return view('klaim.showKlaim', compact('klaim','korban_mg','korban_lk'));
    }
    
    public function uangShow()
    {

        $uang = Keuangan::where('status','baru')->first();
        
        return view('keuangan.showUang', compact('uang'));
    }

    public function tambahKorban(Request $request)
    {
        
        Korban::insert([
            'kasus' =>$request->kasus,
            'jumlah' =>$request->jumlah,
            'created_at'=>now(),
        ]);
    }

    public function import_excel(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|image:csv,xls,xlsx'
        ],
        [
            'file.required' => 'Document Harus Di Isi',
            'file.image' => 'Format Document Harus Excel',
        ]);

        $file= $request->file('file');
        $fileName = $file->getClientOriginalName();
        
        $proses= Excel::toArray(new SwImport,$file);

        // dd($proses[0][121][2]);

                // $insert_data= SW::insert([
                //     'bulan_Ini'=>$proses[0],[11],[2],
                //     'sdBulan_Ini'=>$proses[0],[11],[3],
                //     'anggaran'=>$proses[0],[11],[4],
                //     '%'=>$proses[0],[11],[5],
                //     'realisasi'=>$proses[0],[11],[6],
                // ]);
        // 
        // // dd($data_sw);
        $data_sw = SW::where('status','baru')->update(['status'=>'lama']);
        $sw = new SW;
        $sw->bulan_Ini = $proses[0][11][2];
        $sw->sdBulan_Ini = $proses[0][11][3];
        $sw->anggaran = $proses[0][11][4];
        $sw->persentasi = $proses[0][11][5];
        $sw->realisasi = $proses[0][11][6];
        $sw->status = 'baru';
        $sw->save();

        $data_iw = IW::where('status','baru')->update(['status'=>'lama']);
        $iw = new IW;
        $iw->bulan_Ini = $proses[0][10][2];
        $iw->sdBulan_Ini = $proses[0][10][3];
        $iw->anggaran = $proses[0][10][4];
        $iw->persentasi = $proses[0][10][5];
        $iw->realisasi = $proses[0][10][6];
        $iw->status = 'baru';
        $iw->save();

        $data_klaim = Klaim::where('status','baru')->update(['status'=>'lama']);
        $klaim = new Klaim;
        $klaim -> jp33_sdbln = $proses[0][36][3];
        $klaim -> jp34_sdbln = $proses[0][39][3];  
        $klaim -> jp33_bln = $proses[0][36][2];  
        $klaim -> jp34_bln = $proses[0][39][2];  
        $klaim -> jp_sdbln = $proses[0][36][3]+$proses[0][39][3];  
        $klaim -> jp_bln = $proses[0][36][2]+$proses[0][39][2];  
        $klaim -> rasio33=($proses[0][36][3]/$proses[0][10][3] )*100;
        $klaim -> rasio34=($proses[0][39][3]/$proses[0][11][3] )*100;
        $klaim -> status='baru';
        $klaim-> save();

        $data_uang = Keuangan::where('status','baru')->update(['status'=>'lama']);
        $uang = new Keuangan;
        $uang -> total_biaya_sdbln = $proses[0][120][3];
        $uang -> total_biaya_bln = $proses[0][120][2];
        $uang -> total_laba_sdbln = $proses[0][121][3];
        $uang -> total_laba_bln = $proses[0][121][2];
        $uang -> status = 'baru';
        $uang -> save();

        

        
        return redirect()->back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        $sw = SW::find($id);
        return view('form.sw_edit',compact('sw'));
    }

    public function editIW($id)
    {
        $iw=IW::find($id);
        // echo $iw;
        return view('iw.editIw', compact('iw'));
        
    }

    public function editKlaim($id)
    {
        $klaim=Klaim::find($id);
        return view('klaim.editKlaim',compact('klaim'));
    }

    public function editUang($id)
    {
        $uang=Keuangan::find($id);
        return view('keuangan.editUang',compact('uang'));
    }

    public function editKorban($id)
    {
        $korban=Korban::find($id);
        return view('korban.editKorban',compact('korban'));
    }

    public function swUpdate(Request $request, $id)
    {
        $validation = $request->validate([
            'bulan_Ini'=> 'required|numeric',
        ]);
        

        $data = SW::where('status','baru')->update(['status'=>'lama']);
        SW::where('sw_id',$id)->update([
            'bulan_Ini'=>$request->bulan_Ini,
            'sdBulan_Ini'=>$request->sdBulan_Ini,
            'anggaran'=>$request->anggaran,
            'persentasi'=>$request->persentasi,
            'realisasi'=>$request->realisasi,
            'status'=>$request->status,
        ]);
        if($request->ajax()){
            \Session::flash('success','Data Berhasil Diubah');
            $response = array(
                'status' => 'success',
                'url' => action('SwController@index'),
                );
            return $response;
        }else{
            \Session::flash('error','Data Berhasil Diubah');
            return redirect()->action('SwController@index');
        }
        
        
    }

    public function iwUpdate(Request $request, $id)
    {
        $status = IW::where('status','baru')->update(['status'=>'lama']);
        IW::where('iw_id',$id)->update([
            'bulan_Ini'=>$request->bulan_Ini,
            'sdBulan_Ini'=>$request->sdBulan_Ini,
            'anggaran'=>$request->anggaran,
            'persentasi'=>$request->persentasi,
            'realisasi'=>$request->realisasi,
            'status' => $request->status,
        ]);
        if($request->ajax()){
            \Session::flash('success','Data Berhasil Diubah');
            $response = array(
                'status' => 'success',
                'url' => action('SwController@iwIndex'),
                );
            return $response;
        }else{
            \Session::flash('success','Data Berhasil Diubah');
            return redirect()->action('SwController@iwIndex');
        }
    }

    public function klaimUpdate(Request $request, $id)
    {
        $status = Klaim::where('status','baru')->update(['status'=>'lama']);
        Klaim::where('id_klaim',$id)->update([
            'jp33_sdbln'=>$request->jp33_sdbln,
            'jp34_sdbln'=>$request->jp34_sdbln,
            'jp33_bln'=>$request->jp33_bln,
            'jp34_bln'=>$request->jp34_bln,
            'jp_sdbln'=>$request->jp_sdbln,
            'jp_bln'=>$request->jp_bln,
            'rasio33' => $request->rasio33,
            'rasio34' => $request->rasio34,
            'status' => $request->status,
        ]);
        if($request->ajax()){
            \Session::flash('success','Data Berhasil Diubah');
            $response = array(
                'status' => 'success',
                'url' => action('SwController@klaimIndex'),
                );
            return $response;
        }else{
            \Session::flash('success','Data Berhasil Diubah');
            return redirect()->action('SwController@klaimIndex');
        }
    }

    public function uangUpdate(Request $request, $id)
    {
        $status = Keuangan::where('status','baru')->update(['status'=>'lama']);
        Keuangan::where('id_keuangan',$id)->update([
            'total_biaya_sdbln'=>$request->total_biaya_sdbln,
            'total_biaya_bln'=>$request->total_biaya_bln,
            'total_laba_sdbln'=>$request->total_laba_sdbln,
            'total_laba_bln'=>$request->total_laba_bln,
            'status' => $request->status,
        ]);
        if($request->ajax()){
            \Session::flash('success','Data Berhasil Diubah');
            $response = array(
                'status' => 'success',
                'url' => action('SwController@uangIndex'),
                );
            return $response;
        }else{
            \Session::flash('success','Data Berhasil Diubah');
            return redirect()->action('SwController@uangIndex');
        }
    }

    public function korbanUpdate(Request $request, $id)
    {
        // $status = Keuangan::where('status','baru')->update(['status'=>'lama']);
        Korban::where('id',$id)->update([
            'kasus'=>$request->kasus,
            'jumlah'=>$request->jumlah,
        ]);
        if($request->ajax()){
            \Session::flash('success','Data Berhasil Diubah');
            $response = array(
                'status' => 'success',
                'url' => action('SwController@korbanIndex'),
                );
            return $response;
        }else{
            \Session::flash('success','Data Berhasil Diubah');
            return redirect()->action('SwController@korbanIndex');
        }
    }

    public function hapusSw($id)
    {
        $sw = SW::where('sw_id',$id);
        $sw->delete();
        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }

    public function hapusIw($id)
    {
        $iw = IW::where('iw_id',$id);
        $iw->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }

    public function hapusKlaim($id)
    {
        $iw = Klaim::where('id_klaim',$id);
        $iw->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }

    public function hapusUang($id)
    {
        $iw = Keuangan::where('id_keuangan',$id);
        $iw->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }

    public function hapusKorban($id)
    {
        $iw = Korban::where('id',$id);
        $iw->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }
}
