<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStokRequest;
use App\Http\Requests\UpdateStokRequest;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = auth()->user()->id;
        return view('stok.stok', [
            "title" => "Gudang Stok".$id,
            "title2" => "Lihat Stok".$id,
            'warehouse' => Gudang::where('id_user', $user)->get(),
            'title3' => Gudang::find($id)->nama_gudang,
            'stok' => Stok::where('id_gudang',$id)->whereNotNull('id_produk')->with('produk'.'brand')->get(),
            'countstok' => Stok::where('id_gudang',$id)->whereNotNull('id_produk')->count(),
            'gift' => Stok::where('id_gudang',$id)->whereNotNull('id_hadiah')->get(),
            'countgift' => Stok::where('id_gudang',$id)->whereNotNull('id_hadiah')->count(),
        ]);
    }

    public function index2()
    {
        return view('stok.riwayatstok', [
            "title" => "riwstok"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStokRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(Stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStokRequest  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStokRequest $request, Stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stok)
    {
        //
    }
}
