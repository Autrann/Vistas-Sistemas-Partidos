<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class INSPController extends Controller
{
  public function index()
  {
    return view('pages.INSP');
  }
}
