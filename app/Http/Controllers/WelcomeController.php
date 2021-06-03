<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SW;
use App\IW;
use App\Klaim;
use App\Keuangan;
use App\Korban;
use App\Gambar;

class WelcomeController extends Controller
{
    public function index(Request $r)
    {
        if($r->ajax()){
                
            $hasil=parent::get_data($r);

            
            return response()->json($hasil);
            // dd($data);
            
    }
    // $dataKorban=[];
    // $dataLuka=[];
    // $jumlah_mgl=[];
    // $tahun_korban=date('Y');
    // $years = [];
    // $year=  $r->tahun;
    //     $years['korban_mg']=Korban::where('created_at','like',$year.'%')->where('kasus','meninggal')->sum('jumlah');
    //     $years['korban_lk']=Korban::where('created_at','like',$year.'%')->where('kasus','luka-luka')->sum('jumlah');

    // return $years['korban_mg'];
    // dd($korban_mg, $korban_lk);
    // dd($korban_lk);           
   
    // $year=  $r->tahun;
    //    $korban_mg=Korban::where('created_at','like',$year.'%')->where('kasus','meninggal')->sum('jumlah');
    //     $korban_lk=Korban::where('created_at','like',$year.'%')->where('kasus','luka-luka')->sum('jumlah');
            
    $gambar = Gambar::where('keterangan','event')->first('image');
    $gambar2 = Gambar::where('keterangan','jasa raharja')->first('image');
    $gambar3 = Gambar::where('keterangan','peta')->first('image');

    return view('welcome',compact('gambar','gambar2','gambar3'));
    // return view('welcome');
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
}
