<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\barang;
use App\Models\Kategori_Barang;
use App\Models\User;
use App\Models\Role;
use App\Models\gudang;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $counter = '1';
        // // $log = auth()->user()->role()->higher_role;
        // $role = Role::where('Role', '=' , 'Admin')->pluck('id');
        // $user = User::where('id_role', $role)->pluck('id');
        // $id_kategori = Kategori_Barang::where('id_user', $user)->pluck('id');
        // $barang = barang::where('id_kategori',$id_kategori)->get();

        {
            return view('index', [
                "title"         => "Daftar Mitra",
                // 'barang' => $barang,
                'counter1'       => 1,
                'counter2'       => 1,
                'count'       => gudang::count('id_user', auth()->user()->id),
                'warehouse' => Gudang::where('id_user', auth()->user()->id)->get(),
            ]);
        }
    }
    public function pengaturan()
    { {
            return view('pengaturan', [
                "title" => "Pengaturan",
                'warehouse' => Gudang::where('id_user', auth()->user()->id)->get(),
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIndexRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndexRequest  $request
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
