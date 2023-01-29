<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohController extends Controller
{
    public function contoh()
    {
        $a=8;
        $b=2;
        $penjumlahan=$a+$b;


        return view('contoh')->with([
            'penjumlahan' => $penjumlahan
        ]);
    }
}
