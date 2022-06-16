<?php

namespace App\Http\Controllers;

use App\Models\stok_dummy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storestok_dummyRequest;
use App\Http\Requests\Updatestok_dummyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokDummyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storestok_dummyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('stock__dummys')->insert([
            'id_user' => auth()->user()->id,
            'warehouse_id' => $request['warehouse'],
            'stock_qty' => $Request['stock_qty'],
        ])
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stok_dummy  $stok_dummy
     * @return \Illuminate\Http\Response
     */
    public function show(stok_dummy $stok_dummy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stok_dummy  $stok_dummy
     * @return \Illuminate\Http\Response
     */
    public function edit(stok_dummy $stok_dummy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestok_dummyRequest  $request
     * @param  \App\Models\stok_dummy  $stok_dummy
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestok_dummyRequest $request, stok_dummy $stok_dummy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stok_dummy  $stok_dummy
     * @return \Illuminate\Http\Response
     */
    public function destroy(stok_dummy $stok_dummy)
    {
        //
    }
}
