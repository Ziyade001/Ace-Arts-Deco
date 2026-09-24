<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function catalogues()
    {
        return view('layouts.catalogues');
    }
}
