<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRDController extends Controller
{
    public function index()
    {
        $title = 'Human resource department';
        return view('HRD.index', compact('title'));
    }
}
