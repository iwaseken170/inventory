<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller{

    public function index(){

        $roles = Role::all();
        return view('manage.roles.index')->withRoles($roles);
    }


    public function create(){

        $permissions = Permission::all();
        return view('manage.roles.create')->withPermissions($permissions);
    }


    public function store(Request $request){

        $this->validateWith([
            'display_name' => 'required|max:255',
            'name' => 'required|max:100|alpha_dash|unique:roles',
            'description' => 'sometimes|max:255'
        ]);

        $role = new Role();
        $role->display_name = $request->display_name;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        if ($request->permissions) {
            $role->syncPermissions(explode(',', $request->permissions));
        }

        return redirect()->route('roles.show', $role->id)->with('store', 'Role was saved');
    }


    public function show($id){

        $role = Role::where('id', $id)->with('permissions')->first();
        return view('manage.roles.show')->withRole($role);
    }


    public function edit($id){

        $role = Role::where('id', $id)->with('permissions')->first();
        $permissions = Permission::all();
        return view('manage.roles.edit')->withRole($role)->withPermissions($permissions);
    }

    public function update(Request $request, $id){

        $this->validateWith([
            'display_name' => 'required|max:255',
            'description' => 'sometimes|max:255'
        ]);

        $role = Role::findOrFail($id);
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        if ($request->permissions) {
            $role->syncPermissions(explode(',', $request->permissions));
        }

        Session::flash('success', 'Successfully update the '. $role->display_name . ' role in the database.');
        return redirect()->route('roles.show', $id)->with('update', 'Role was updated');
    }

    public function destroy($id){

    }
}
