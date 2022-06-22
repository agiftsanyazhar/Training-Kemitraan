<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HTController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add_gift_temp(Request $request)
    {
        // periksa apakah sudah ada gudang dengan id terkait yang ditambahkan
        $check = DB::table('stok_dummies')
            ->where('warehouse_id', $request->warehouse)
            ->where('id_user', auth()->user()->id)
            ->count();

        // Jika ada maka update
        if ($check > 0) {
            $found = DB::table('stok_dummies')
                ->where('warehouse_id', $request->warehouse)
                ->where('id_user', auth()->user()->id)
                ->first();

            $stock = $found->stock_qty + $request->stock_qty;
            DB::table('stok_dummies')
                ->where('stock_id', $found->stock_id)
                ->update(['stock_qty' => $stock]);
        } else {
            //jika tidak maka insert
            DB::table('stok_dummies')->insert([
                'id_user' => auth()->user()->id,
                'warehouse_id' => $request->warehouse,
                'stock_qty' => $request->stock_qty
            ]);
        }
        return true;
    }

    public function show_gift_temp(Request $request)
    {
        $temps = DB::table('stok_dummies')
            ->join('gudangs', 'stok_dummies.warehouse_id', '=', 'gudangs.id')
            ->select('*')
            ->get();

        foreach ($temps as $t) {
            echo '<div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <h5>' . $t->nama_gudang . '</h5>
                        <a href="javascript:void(0)" onclick="deleteWarehouse(' . $t->stock_id . ')" style="text-decoration: none" class="text-danger">Hapus</a>
                    </div>    
                    <div class="input-group">
                        <input type="number" name="product_stock[]" value="' . $t->stock_qty . '" class="form-control form-control-lg">
                        <div class="input-group-text">
                            pcs
                        </div>
                    </div>
                </div>';
        }
    }

    public function delete_gift_temp(Request $request)
    {
        DB::table('stok_dummies')->where('stock_id', '=', $request->stock_id)->delete();
        return true;
    }
}
