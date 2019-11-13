<?php

namespace App\Http\Controllers;

use App\Fotografer;
use Illuminate\Http\Request;

class CmsFotograferController extends Controller
{
    public function index() {
      $fotografer = Fotografer::all();
      return view('adminFotografer.index', ['list_fotografer' => $fotografer, 'show' => 'index']);
    }


}
