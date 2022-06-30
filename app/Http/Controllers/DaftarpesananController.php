<?php

namespace App\Http\Controllers;

use App\Models\Daftarpesanan;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarpesananController extends Controller
{
    public function index()
    {
        return view('daftarpesanan', [
            "title" => "daftarpesanan",
            'count'       => gudang::count('id_user', auth()->user()->id),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }
}
