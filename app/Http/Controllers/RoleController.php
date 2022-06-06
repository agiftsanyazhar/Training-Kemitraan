<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('role', [
            'title' => 'Role',
            'role' => Role::orderBy('level')->get(),
            'counter' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jmlh_Role = Role::all()->last()->id;
        return view('create.role', [
            'title' => 'Tambah Role',
            'role'  => $jmlh_Role
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Role'          => 'required|max:50',
            'level'         => 'required',
        ]);

        DB::table('roles')->insert([
            'Role'          =>$validatedData['Role'],
            'level'         =>$validatedData['level']
        ]);

        $new_role = Role::all()->last()->id;
        $new_level = Role::all()->last()->level;

        for($i=$new_role-1;$i>=$new_level;$i--)
        {
            DB::table('roles')->where('level',$i)->limit(1)->update([
                'level'         =>$i+1
            ]);
        }

        $request->session()->flash('successRole','Role Berhasil Ditambah!');

        return redirect('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
