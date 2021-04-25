<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SW extends Model
{
    protected $table = "sw";
    protected $primaryKey = 'sw_id';

    protected $fillable = [
        "bulan_Ini", "sdBulan_Ini", "anggaran", "persentasi", "realisasi","status","created_at",
    ];
}
