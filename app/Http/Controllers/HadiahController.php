<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Http\Requests\StoreHadiahRequest;
use App\Http\Requests\UpdateHadiahRequest;

use Illuminate\Support\Str;

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
            $post = "pada liburan kenaikan kelas tahun lalu, aku, teman-teman, dan para guru si sekolah berwisata ke pantai pandawa di daerah kutuh, nusa dua, bali. memerlukan waktu 3 jam dari sekolah menuju pantai tersebut. liburan kali ini sangat menyenangkan karena ini baru pertama kalinya aku berkunjung ke pantai pandawa, jalan menuju ke panta adalah jalan tol dengan tebing-tebing di pinggir jalan, sampai di pantai, pemandangan begitu menakjubkan, pasir yang putih, laut yang biru, dan tebing yang megah berdiri, rasanya begitu menyenangkan sekali, dan kami menghabiskan waktu disana sekitar 5 jam sebelum menuju objek wisata lainnya, yaitu ke bajra sandi, uluwattu, tiara, tirta gangga, pantai kuta, goa gajah, trunyan, dll masih banyak lagi.";
            return view('hadiah', [
                "title"     => "Hadiah",
                'counter'   => 1,
                'post'      => $post,
                'after'     => Str::words($post, 20)
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
