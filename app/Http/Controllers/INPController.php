<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class INPController extends Controller
{
  public function index()
  {
    return view('pages.INP');
  }
}
