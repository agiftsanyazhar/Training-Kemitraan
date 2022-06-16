<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\gudang;
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
            'counter' => 1,
            'warehouse' => Gudang::where('id_user',auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jmlh_Role = Role::orderBy('level', 'desc')->first();
        $jmlh_Role = $jmlh_Role->level;
        return view('create.role', [
            'title' => 'Tambah Role',
            'role'  => $jmlh_Role,
            'warehouse' => Gudang::where('id_user',auth()->user()->id)->get()
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
        $new = Role::find($request['id']);
        
        if($new_role!=$new_level){
            for($i=$new_role-1;$i>=$new_level;$i--)
            {
                DB::table('roles')->where('level',$i)->whereNot('id',$new_role)->update([
                    'level'         =>$i+1
                ]);
            }
        }
        
        return redirect('/role')->with('successRole','Data berhasil ditambah!');
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
    public function edit($id)
    {
        $jmlh_Role = Role::orderBy('level', 'desc')->first();
        $jmlh_Role = $jmlh_Role->level;
        return view('edit.role', [
            'title' => 'Edit Role',
            'data'  => Role::find($id),
            'role'  => $jmlh_Role,
            'warehouse' => Gudang::where('id_user',auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $old = Role::find($request['id']);

        DB::table('roles')->where('id', $request['id'])->update([
            'level'         => $request['level'],
            'Role'          => $request['Role']
        ]);

        $new = Role::find($request['id']);

        if($old['level']>$new['level']){
            $level_old = $old->level;
            $level_edit= $level_old-1;

            for($i=$level_edit;$i>=$new['level'];$i--)
            {
                DB::table('roles')->where('level',$i)->whereNot('id',$new['id'])->update([
                    'level'     =>$i+1
                ]);
            }
        }

        else{
            $level_old = $old->level;
            $level_new = $new->level;

            for($i=$level_old+1;$i<=$level_new;$i++)
            {
                DB::table('roles')->where('level',$i)->whereNot('id',$new['id'])->update([
                    'level'     =>$i-1
                ]);
            }
        }

        return redirect('/role')->with('updateRole','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_role = Role::find($id);
        $del_role = $del_role->level;

        $jmlh_Role = Role::orderBy('level', 'desc')->first();
        $jmlh_Role = $jmlh_Role->level;

        for($i=$del_role+1;$i<=$jmlh_Role;$i++){
            DB::table('roles')->where('level',$i)->update([
                'level'     =>$i-1
            ]);
        }

        Role::find($id)->delete();

        return redirect('/role')->with('deleteRole','Data berhasil dihapus!');
    }
}
