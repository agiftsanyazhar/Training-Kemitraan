<?php

namespace App\Http\Controllers;

use App\Models\Daftarmitra;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarmitraController extends Controller
{
    public function index()
    {
        return view('daftarmitra', [
            "title" => "daftarmitra",
            'count'       => gudang::count('id_user', auth()->user()->id),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }
}
