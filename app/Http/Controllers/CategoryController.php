<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller{

    public function category(){

        return view('categories.category');
    }

    public function addCategory(Request $request){

        $this->validate($request, [
            'category' => 'required|min:4'
        ]);
        $categories = Category::create($request->all());
        return redirect()->back()->with('response','Category Successfully Added!!!');
    }
}
