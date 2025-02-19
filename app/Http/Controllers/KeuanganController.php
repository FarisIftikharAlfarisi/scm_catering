<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        $title = 'Keuangan';
        return view('Keuangan.index', compact('title'));
    }
}
