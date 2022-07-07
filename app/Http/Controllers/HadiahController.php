<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Models\Stok;
use App\Models\User;
use App\Models\gudang;
use App\Http\Requests\StoreHadiahRequest;
use App\Http\Requests\UpdateHadiahRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $post = "pada liburan kenaikan kelas tahun lalu, aku, teman-teman, dan para guru si sekolah berwisata ke pantai pandawa di daerah kutuh, nusa dua, bali. memerlukan waktu 3 jam dari sekolah menuju pantai tersebut. liburan kali ini sangat menyenangkan karena ini baru pertama kalinya aku berkunjung ke pantai pandawa, jalan menuju ke panta adalah jalan tol dengan tebing-tebing di pinggir jalan, sampai di pantai, pemandangan begitu menakjubkan, pasir yang putih, laut yang biru, dan tebing yang megah berdiri, rasanya begitu menyenangkan sekali, dan kami menghabiskan waktu disana sekitar 5 jam sebelum menuju objek wisata lainnya, yaitu ke bajra sandi, uluwattu, tiara, tirta gangga, pantai kuta, goa gajah, trunyan, dll masih banyak lagi.";
            return view('hadiah', [
                "title"     => "Hadiah",
                'counter'   => 1,
                'count'       => gudang::count('id_user', auth()->user()->id),
                'hadiah'    => Hadiah::where('id_user', auth()->user()->id)->get(),
                'post'      => $post,
                'after'     => Str::words($post, 20),
                'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
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
            "title" => "Hadiah",
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHadiahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input(); //insert into

        $hadiah = new Hadiah; // table
        $user = auth()->user()->id;
        //value
        $hadiah->nama_hadiah        = $data['nama_hadiah'];
        $hadiah->hpp_hadiah         = $data['hpp_hadiah'];
        $hadiah->het_hadiah         = $data['het_hadiah'];
        $hadiah->deskripsi_hadiah    = $data['deskripsi_hadiah'];
        $hadiah->id_user            = $user;
        $hadiah->save(); //tombol run sqlyog

        $count = count($request['id_gudang']);
        $id_gudang = $request['id_gudang'];
        $stok = $request['pcs'];
        $id_hadiah = Hadiah::where('id_user', $user)->latest()->pluck('id');
        $id_hadiah = $id_hadiah[0];

        for($i=0;$i<$count;$i++){
            if(Stok::where('id_gudang',$id_gudang[$i])->where('id_hadiah',$id_hadiah)->exists()){
                $id = Stok::where('id_gudang',$id_gudang[$i])->where('id_hadiah',$id_hadiah)->pluck('id');
                $old_stok = Stok::where('id_gudang',$id_gudang[$i])->where('id_hadiah',$id_hadiah)->pluck('stok');
                $new_stok = $old_stok[0] +(integer) $stok[$i];
                DB::table('stoks')->where('id',$id[0])->update([
                    'stok'         => $new_stok
                ]);
            }
            else{
                DB::table('stoks')->insert([
                    'id_gudang'    => $id_gudang[$i],
                    'id_hadiah'    => $id_hadiah,
                    'stok'         => $stok[$i]
                ]);
            }
            
        }
        return redirect('/hadiah')->with('successHadiah', 'Data berhasil ditambah!');
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
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
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
        return redirect('/hadiah')->with('updateHadiah', 'Data berhasil diubah!');
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

        return redirect('/hadiah')->with('deleteHadiah', 'Data berhasil dihapus!');
    }
}
