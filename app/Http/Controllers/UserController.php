<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller{

    public function index(){

        $users = User::all();
        return view('manage.users.index')->withUsers($users);
    }

    public function create(){

        $roles = Role::all();
        return view('manage.users.create')->withRoles($roles);

    }

    public function store(Request $request){

        $this->validateWith([
            'name' => 'required|max:255',
            'email' => 'required|unique:users'
        ]);

        if (!empty($request->password)) {
            $password = trim($request->password);
        } else {
            # set the manual password
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->save();

        if ($request->roles) {
            $user->syncRoles(explode(',', $request->roles));
        }

        return redirect()->route('users.show',$user->id)->with('store', 'User was saved');

    }

    public function show($id){

        $user = User::findOrfail($id);
        return view('manage.users.show')->withUser($user);
    }


    public function edit($id){

        $roles =Role::all();
        $user = User::where('id',$id)->with('roles')->first();
        return view('manage.users.edit')->withUser($user)->withRoles($roles);
    }

    public function update(Request $request, $id){

        $this->validateWith([
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email,'.$id
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password_options == 'auto') {
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $user->password = Hash::make($str);
        } elseif ($request->password_options == 'manual') {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        if($user->save()){
            $user->syncRoles(explode(',', $request->roles));
            return redirect()->route('users.show', $id)->with('success','success')->with('update', 'User was updated');;
        }else{
            return redirect()->route('users.show', $id);
        }

    }

    public function destroy(Request $request){

        User::destroy($request->id);
        return response(['msg' => 'User deleted', 'status' => 'success']);

    }
}
