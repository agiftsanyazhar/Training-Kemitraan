<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use App\Http\Requests\StoregudangRequest;
use App\Http\Requests\UpdategudangRequest;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudang = gudang::all();

        {
            return view('gudang', [
                "title" => "Gudang",
                'counter' => 1,
                'gudang' => $gudang
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
        return view('create.gudang', [
            "title" => "Tambah Gudang"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregudangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregudangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(gudang $gudang)
    {
        return view('edit.gudang', [
            "title" => "Edit Gudang"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategudangRequest  $request
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategudangRequest $request, gudang $gudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(gudang $gudang)
    {
        //
    }
}
