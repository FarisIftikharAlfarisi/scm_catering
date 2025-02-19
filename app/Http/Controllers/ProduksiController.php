<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $title = 'Produksi';
        return view('Produksi.index', compact('title'));
    }
}
