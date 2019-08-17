<?php

namespace App\Http\Controllers;

use App\Fotografer; 
use Illuminate\Http\Request;

class FotograferController extends Controller
{
  public function index() {
    $fotografer = Fotografer::all();
    return view('fotografer.index', ['list_fotografer' => $fotografer, 'show' => 'index']);
  }
}
