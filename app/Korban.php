<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korban extends Model
{

    protected $primaryKey = 'id';
    protected $fillable = [
        "meninggal","luka_luka",
    ];
}
