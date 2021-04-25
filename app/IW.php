<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IW extends Model
{
    protected $table = "iw";
    protected $primaryKey = 'iw_id';

    protected $fillable = 
    [
        "bulan_Ini", "sdBulan_Ini", "anggaran", "persentasi", "realisasi",
    ];
}
