<?php

namespace App\Http\Controllers;

use App\Models\SignIn;
use App\Http\Requests\StoreSignInRequest;
use App\Http\Requests\UpdateSignInRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('sign-in', [
                "title" => "Sign In"
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request -> validate([
            'username'      => 'required',
            'password'      => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/')->with('successSignin', 'Sign in berhasil! Selamat datang');;
        };
        
        return back()->with('signinError', 'Sign in gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/sign-in');
    }

}
