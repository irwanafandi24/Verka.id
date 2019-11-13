<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
      return redirect('/');
    }

    public function postlogin(Request $request) {

      $user = User::where('user_email', '=', $request->user_email)->first();

      if(Auth::attempt($request->only('user_email', 'password'))) {
        return redirect('/dashboard');
      } else {
        $message = (!empty($user)) ? "Password salah, cek kembali password dan pastikan capslock mati" : "Email belum terdaftar" ;
        return view('auth.login', ['message' => $message]);
      }
    }

    public function register() {
      return view('auth.register');
    }

    public function postregister(Request $request) {
      $this->validate($request,[
        'email' => ['required', 'unique:user'],
        'password' => 'required|confirmed'
      ]);

      User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

      return redirect('/');
    }

    public function logout() {
      Auth::logout();
      return redirect('/');
    }
}
