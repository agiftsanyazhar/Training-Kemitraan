<?php

namespace App\Http\Controllers;

use App\Models\Daftarbarang;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarbarangController extends Controller
{
    public function index()
    {
        return view('daftarbarang', [
            "title" => "daftarbarang",
            'count'       => gudang::count('id_user', auth()->user()->id),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }
}
