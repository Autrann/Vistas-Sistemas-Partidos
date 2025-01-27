<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ICEController extends Controller
{
    public function index()
    {
        return view('pages.concentracion');
    }
}
