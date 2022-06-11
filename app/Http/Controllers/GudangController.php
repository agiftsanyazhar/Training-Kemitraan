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
        $data = $request->input();//insert into
        
        $gudang = new Gudang;// table
        $user = auth()->user()->id;
        //value
        $gudang->nama_gudang   = $data['nama_gudang'];
        $gudang->lokasi_gudang      = $data['alamat_gudang'];
        $gudang->id_user = $user;
        $gudang->save();//tombol run sqlyog

        return redirect('/gudang')->with('successGudang','Data berhasil ditambah!');
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
    public function edit($id)
    {
        $data = gudang::find($id);
        return view('edit.gudang', [
            "title" => "Edit Gudang",
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategudangRequest  $request
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(gudang $request, $id)
    {
        echo $request->nama_gudang;
        echo $request->alamat;
        // gudang::where("id", $id)->update(
        //     [
        //         "nama_gudang" => $request->nama_gudang, 
        //         "lokasi_gudang" => $request->alamat
        //     ]
        // );
        
        // return redirect('/gudang')->with('updateGudang','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gudang::find($id)->delete();

        return redirect('/gudang')->with('deleteGudang','Data berhasi dihapus!');
    }
}
