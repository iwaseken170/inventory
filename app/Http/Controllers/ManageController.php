<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Kb;

class ManageController extends Controller{

    public function dashboard(){
        return view('manage.dashboard');
    }

    public function index(){
        /*$user_id = Auth::user()->id;
        $profile = DB::table('users')
            ->join('profiles','users.id','=','profiles.user_id')
            ->select('users.*','profiles.*')
            ->where(['profiles.user_id' => $user_id])
            ->first();
        return view('manage.dashboard',['profile' => $profile]);*/
    }

  
}
