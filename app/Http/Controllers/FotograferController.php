<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotograferController extends Controller
{
    public function index() {
      return view('adminFotografer.index');
    }
}
