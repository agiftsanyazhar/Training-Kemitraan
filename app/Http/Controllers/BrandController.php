<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\gudang;
use SebastianBergmann\LinesOfCode\Counter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            return view('brand', [
                "title"     => "Brand",
                'brand'     => Brand::where('id_user', auth()->user()->id)->get(), //select*from table brand
                'counter'   => 1,
                'staticBackdrop'   => 1,
                'count'     => gudang::count('id_user', auth()->user()->id),
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
        $user = auth()->user()->id;
        return view('create.brand', [
            "title" => "Brand",
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $data = $request->input(); //insert into
        // $data['gudang'];
        $brand = new Brand; // table
        $user = auth()->user()->id;
        //value
        $brand->nama_brand   = $data['nama_brand'];
        $brand->id_user      = $user;
        $brand->save(); //tombol run sqlyog

        return redirect('/brand')->with('successBrand', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit.brand', [
            "title" => "Edit Brand",
            "data"  => Brand::find($id),
            'warehouse' => Gudang::where('id_user', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('brands')->where('id', $request['id'])->update([
            'nama_brand'   => $request['nama_brand'],
        ]);
        return redirect('/brand')->with('updateBrand', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();

        return redirect('/brand')->with('deleteBrand', 'Data berhasil dihapus!');
    }
}
