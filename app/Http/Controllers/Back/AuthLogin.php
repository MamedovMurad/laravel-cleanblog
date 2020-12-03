<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
    public function loginpost(Request $request){

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        toastr()->success('yeniden xos gorduk.', Auth::user()->name, ['timeOut' => 5000]);
    return redirect()->route('admin.dashboard');
}   return redirect()->route('admin.login')->withErrors('email adresi ve ya sifre yanlisdir!');

    }
    public function logout(){
     Auth::logout();
    return redirect()->route('admin.login');
    }
}
