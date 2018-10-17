<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_makanan;
use App\tb_minuman;

class ProductController extends Controller
{
    public function getIndex()
    {
        $makanans = tb_makanan::all();
        $minumans = tb_minuman::all();
        return view('shop.index', ['makanan' => $makanans], ['minuman' => $minumans]);
    }
}
