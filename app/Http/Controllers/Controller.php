<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\SW;
use App\IW;
use App\Klaim;
use App\Keuangan;
use App\Korban;
use App\Gambar;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function get_data($r)
    {
        $data=[];
                $sw=SW::where('status','baru')->first();
                $iw=IW::where('status','baru')->first();
                $klaim=Klaim::where('status','=','baru')->first();
                $keuangan=Keuangan::where('status','=','baru')->first();
                     
                    if($sw){
                        $data['sw']=$sw->sdBulan_Ini;
                    }else{
                        $data['sw']=0;
                    }
                    if($iw){
                    $data['iw']=$iw->sdBulan_Ini;
                    }else{
                        $data['iw']=0;
                    }
                    if($klaim){
                        $data['klaim']=$klaim->jp_sdbln;
                    }else{
                        $data['klaim']=0;
                    }
                    if($keuangan){
                        $data['keuangan']=$keuangan->total_biaya_sdbln;
                    }else{
                        $data['keuangan']=0;
                    }
                    $data['data_grafik']=[];
                    $tahun=$r->tahun;
                    for($i=1; $i<=12; $i++){
                        //2021-03
                        $bulan=$i;

                        if(strlen($bulan)==1)
                        {
                            $bulan="0".$i;
                        }
                        $data['data_grafik']['label_bulan'][]=$tahun."-".$bulan;
                    }
                    $data['data_grafik']['data_sw']=[];
                    foreach($data['data_grafik']['label_bulan'] as $bln)  {
                        $sw=SW::where('created_at','like',$bln."%")->sum('sdBulan_Ini');
                        $iw=IW::where('created_at','like',$bln."%")->sum('sdBulan_Ini');
                        $klaim=Klaim::where('created_at','like',$bln."%")->sum('jp_sdbln');
                        $keuangan=Keuangan::where('created_at','like',$bln."%")->sum('total_biaya_sdbln');
                        $data['data_grafik']['data_sw'][]=(float)  $sw;
                        $data['data_grafik']['data_iw'][]=(float)  $iw;
                        $data['data_grafik']['data_klaim'][]=(float)  $klaim;
                        $data['data_grafik']['data_keuangan'][]=(float)  $keuangan;
                    }
         return $data;
    }
}
