<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table="keuangan";
    protected $primaryKey = 'id_keuangan';

    protected $fillable=[
        "total_biaya_sdbln", "total_biaya_bln", "total_laba_sdbln", "total_laba_bln"
    ];
}
