<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drink extends Model
{
    protected $fillable = ['id_minuman','nama','pathGambar','deskripsi','harga'];
}
