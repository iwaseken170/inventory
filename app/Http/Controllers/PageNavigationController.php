<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNavigationController extends Controller{

    public function index(){

        return view('welcome');
    }
}
