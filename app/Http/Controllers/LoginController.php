<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('home');
            } else {
                return redirect('login')->with('flash_message_error', 'Username atau password salah!');
            }
        }
        return view('login');
    }

    public function logout()
    {
        // Auth::logout();
        // return redirect('/login');
        session::flush();
        return redirect('login')->with('flash_message_success', 'Anda berhasil Logout');
    }
}
