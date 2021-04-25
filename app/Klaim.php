<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    protected $table="klaim_table";
    protected $primaryKey = 'id_klaim';

    protected $fillable = [
        "jp33_sdbln", "jp34_sdbln", "jp33_bln", "jp34_bln", "jp_sdbln", "jp_bln", "rasio33", "rasio34"
    ];
}
