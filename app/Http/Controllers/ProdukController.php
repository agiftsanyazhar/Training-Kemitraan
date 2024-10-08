<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Produk;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use App\Models\Kategori_Barang;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Produk', [
            "title" => "Produk",
            'count'       => gudang::count('id_user', auth()->user()->id),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.produk', [
            "title" => "Produk",
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }
    public function satuan()
    {
        return view('create.produk-satuan', [
            "title" => "Produk (Satuan)",
            'brand' => Brand::where('id_user', auth()->user()->id)->get(),
            'kategori' => Kategori_Barang::all(),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }
    public function paket()
    {
        return view('create.produk-paket', [
            "title" => "Produk (Paket)",
            'brand' => Brand::where('id_user', auth()->user()->id)->get(),
            'kategori' => Kategori_Barang::all(),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
