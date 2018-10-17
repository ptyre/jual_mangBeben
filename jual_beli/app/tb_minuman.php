<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_minuman extends Model
{
    protected $fillable = ['id_minuman','nama','pathGambar','deskripsi','harga'];
}
