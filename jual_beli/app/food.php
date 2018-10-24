<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
     protected $fillable = ['id_makanan','nama','pathGambar','deskripsi','harga'];
}
