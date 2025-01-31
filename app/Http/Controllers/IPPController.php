<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPPController extends Controller
{
  public function index()
  {
    return view('pages.IPP');
  }
}
