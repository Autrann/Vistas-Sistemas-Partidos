<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class INyMPController extends Controller
{
  public function index()
  {
    return view('pages.INyMP');
  }
}
