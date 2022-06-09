<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Barang;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKategori_BarangRequest;
use App\Http\Requests\UpdateKategori_BarangRequest;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $kategori = Kategori_Barang::all();
        {

            return view('kategori', [
                "title" => "Kategori",
                'counter' => 1,
                'kategori' => $kategori
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.kategori', [
            "title" => "Tambah Kategori"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategori_BarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategori_BarangRequest $request)
    {
        $data = $request->input();//insert into
        
        $kategori = new Kategori_Barang;// table
        //value
        $kategori->nama_kategori   = $data['nama_kategori'];
        $kategori->save();//tombol run sqlyog

        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori_Barang  $kategori_Barang
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Barang $kategori_Barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_Barang  $kategori_Barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Barang $kategori_Barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategori_BarangRequest  $request
     * @param  \App\Models\Kategori_Barang  $kategori_Barang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategori_BarangRequest $request, Kategori_Barang $kategori_Barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_Barang  $kategori_Barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori_Barang::find($id)->delete();

        return redirect('/kategori');
    }
}
