<?php

namespace App\Http\Controllers;

use App\Http\Models\H_T;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HTController extends Controller
{
    public function index()
    {
    	$data = Gudang::where('id_user',auth()->user()->id)->get();

    	return $data;
    }
}
