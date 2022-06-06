<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            'title' => 'User',
            'user'  => User::where('registered_by', auth()->user()->id )->get(),
            'counter' => 1
        ]);
    }

    public function create()
    {
        $auth = auth()->user()->role->level;
        $level = $auth+1;
        $roleid = Role::where('level',$level)->pluck('id');
        $id = $roleid[0];
        // dd($id);
        return view('create.user', [
            'title' => 'Tambah User',
            'roleid'=> Role::find($id)->id,
            'role'  => Role::find($id)->Role  
        ]);
    }

    public function store(Request $request)
    {       
        $validatedData = $request->validate([
            'nama_lengkap'  => 'required|max:100',
            'username'      => 'required|max:100',
            'email'         => 'required|email:dns|unique:users',
            'alamat'        => 'required',
            'id_role'       => 'required',
            'password'      => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        DB::table('users')->insert([
            'nama_lengkap'  => $validatedData['nama_lengkap'],
            'username'      => $validatedData['username'],
            'email'         => $validatedData['email'],
            'alamat'        => $validatedData['alamat'],
            'id_role'       => $validatedData['id_role'],
            'password'      => $validatedData['password'],
            'registered_by' => auth()->user()->id
        ]);
        
        // $request->session()->('success','Registrasi Berhasil! Silakan Login');

        return redirect('/user');
    }
}
