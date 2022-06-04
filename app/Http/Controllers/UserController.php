<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('daftarUser', [
            'title' => 'Daftar User',
            'user' => User::where('registered_by', auth()->user()->id )->get()
        ]);
    }
}
