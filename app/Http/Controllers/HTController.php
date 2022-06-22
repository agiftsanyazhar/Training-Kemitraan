<?php

namespace App\Http\Controllers;

use App\Http\Models\H_T;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HTController extends Controller
{
    public function index(request $request)
    {
    	$HT = new H_T;
    	$data = $request->input();
        $HT->warehouse = $data['warehouse'];
        $HT->stock_qty = $data['stock_qty'];
        $HT->id_user = auth()->user()->id;
        $HT->save();

    }
}
