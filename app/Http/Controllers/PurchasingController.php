<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    public function index()
    {
        $title = 'Purchasing';
        return view('Purchasing.index', compact('title'));
    }
}
