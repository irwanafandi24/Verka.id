<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
  public function underMaintenance() {
    return view('underMaintenance');
  }
}
