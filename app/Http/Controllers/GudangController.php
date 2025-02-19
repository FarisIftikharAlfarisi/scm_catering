<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $title = 'Gudang';
        return view('Gudang.index', compact('title'));
    }
}
