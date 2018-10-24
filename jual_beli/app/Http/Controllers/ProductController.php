<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_makanan;
use App\tb_minuman;

class ProductController extends Controller
{
    public function getIndex()
    {
        $foods = food::all();
        $drinks = drink::all();
        return view('shop.index', ['food' => $foods], ['drink' => $drinks]);
    }
}
