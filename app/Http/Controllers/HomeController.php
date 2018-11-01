<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    public function __construct(){

        $this->middleware('auth');
    }
    public function index(){

        $user_id = Auth::user()->id;
        /*$profile = DB::table('users')
            ->join('profiles','users.id','=','profiles.user_id')
            ->select('users.*','profiles.*')
            ->where(['profiles.user_id' => $user_id])
            ->first();
        
        return view('home',['profile' => $profile]);*/
        return view('home');
    }

}
