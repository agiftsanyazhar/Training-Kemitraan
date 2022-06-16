<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Models\User;
use App\Models\gudang;
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
                'hadiah'    => Hadiah::where('id_user', auth()->user()->id)->get(),
                'post'      => $post,
                'after'     => Str::words($post, 20),
                'warehouse' => Gudang::where('id_user',auth()->user()->id)->get(),
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
        return view('create.hadiah', [
            "title" => "Tambah Hadiah",
            'warehouse' => Gudang::where('id_user',auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHadiahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHadiahRequest $request)
    {
        $data = $request->input();//insert into
        
        $hadiah = new Hadiah;// table
        $user = auth()->user()->id;
        //value
        $hadiah->nama_hadiah   = $data['nama_hadiah'];
        $hadiah->nama_hadiah   = $data['stok_hadiah'];
        $hadiah->nama_hadiah   = $data['hpp_hadiah'];
        $hadiah->nama_hadiah   = $data['het_hadiah'];
        $hadiah->nama_hadiah   = $data['deskripshit_hadiah'];
        $hadiah->id_user      = $user;
        $hadiah->save();//tombol run sqlyog

        return redirect('/hadiah')->with('successHadiah','Data berhasil ditambah!');
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
        return view('edit.hadiah', [
            "title" => "Edit Hadiah",
            'warehouse' => Gudang::where('id_user',auth()->user()->id)->get()
        ]);
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
        return redirect('/hadiah')->with('updateHadiah','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hadiah::find($id)->delete();

        return redirect('/hadiah')->with('deleteHadiah','Data berhasil dihapus!');
    }
}
