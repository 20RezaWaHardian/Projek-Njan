<?php

namespace App\Imports;

use App\SW;
use Maatwebsite\Excel\Concerns\ToModel;

class SwImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SW([
            'bulan_Ini'=>$row[2],
            'sdBulan_Ini'=>$row[3],
            'anggaran'=>$row[4],
            'persentasi'=>$row[5],
            'realisasi'=>$row[6],
        ]);
    }
}
