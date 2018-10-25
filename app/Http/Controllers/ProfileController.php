<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Image;


class ProfileController extends Controller{

    public function profile(){

        return view('profiles.profile');
    }

    public function addProfile(Request $request){

        $this->validate($request,[
            'name' => 'required|min:4',
            'designation' => 'required|min:4',
            'profile_pic' => 'required'
        ]);

        $input = $request->all();
        if($request->hasFile('profile_pic')){
            $photo = $request->file('profile_pic');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(200,200)->save(public_path('/avatar/' . $filename));

            $input['profile_pic'] = $filename;
        }
        $profiles = Profile::create($input);


        /*$profiles = new Profile;
        $profiles->name = $request->input('name');
        $profiles->user_id = $request->input('user_id');
        $profiles->designation = $request->input('designation');


        if(Input::hasFile('profile_pic')){
            $file = Input::file('profile_pic');
            $file->move(public_path(). '/avatar', $file->getClientOriginalName());
            $url = URL::to('/').'/avatar/' . $file->getClientOriginalName();
        }
        $profiles->profile_pic = $url;
        $profiles->save();*/
        return redirect('home')->with('response','Profile Successfully Added!!');
    }

}
