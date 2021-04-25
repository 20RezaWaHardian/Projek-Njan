<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SW;
use App\IW;
use App\Klaim;
use App\Keuangan;
use App\Korban;
use App\Gambar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index_welcome(Request $r)
    {
        if($r->ajax()){
                
                $hasil=parent::get_data();
                
                return response()->json($hasil);
                // dd($data);
                
        }
        $dataKorban=[];
        $dataLuka=[];
        $jumlah_mgl=[];
                $korban_mg=Korban::where('kasus','meninggal')->sum('jumlah');
                $korban_lk=Korban::where('kasus','luka-luka')->sum('jumlah');
                
        $gambar = Gambar::where('keterangan','event')->first('image');
        $gambar2 = Gambar::where('keterangan','jasa raharja')->first('image');
        $gambar3 = Gambar::where('keterangan','peta')->first('image');

        return view('welcome',compact('korban_mg','korban_lk','gambar','gambar2','gambar3'));
    } 
    public function index(Request $r)
    {
        if($r->ajax()){
                
                $hasil=$this->get_data($r);
                
                return response()->json($hasil);
                // dd($data);
                
        }
        $dataKorban=[];
        $dataLuka=[];
        $jumlah_mgl=[];
                $korban_mg=Korban::where('kasus','meninggal')->sum('jumlah');
                $korban_lk=Korban::where('kasus','luka-luka')->sum('jumlah');
                
        $gambar = Gambar::where('keterangan','event')->first('image');
        $gambar2 = Gambar::where('keterangan','jasa raharja')->first('image');
        $gambar3 = Gambar::where('keterangan','peta')->first('image');


        return view('home',compact('korban_mg','korban_lk','gambar','gambar2','gambar3'));
    }
}
