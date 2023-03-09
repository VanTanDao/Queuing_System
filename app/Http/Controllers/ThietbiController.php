<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThietbiController extends Controller
{
    public function index() {
        return view('thietbis.index');
    }
}
