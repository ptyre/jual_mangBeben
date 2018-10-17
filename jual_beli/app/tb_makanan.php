<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_makanan extends Model
{
     protected $fillable = ['id_makanan','nama','pathGambar','deskripsi','harga'];
}
