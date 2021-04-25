<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{

    protected $primaryKey = 'id_gambar';

    protected $fillable = 
    [
        'keterangan','image',
    ];
}
