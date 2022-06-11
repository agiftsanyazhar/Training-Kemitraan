<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Http\Requests\StoreHadiahRequest;
use App\Http\Requests\UpdateHadiahRequest;

class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('hadiah', [
                "title" => "Hadiah",
                'counter' => 1,
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
     * @param  \App\Http\Requests\StoreHadiahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHadiahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function show(Hadiah $hadiah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function edit(Hadiah $hadiah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHadiahRequest  $request
     * @param  \App\Models\Hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHadiahRequest $request, Hadiah $hadiah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hadiah $hadiah)
    {
        //
    }
}
