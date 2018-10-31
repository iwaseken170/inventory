<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;

class SupportContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         
         $supports = Support::all();
         return view('user.Support_Contacts.index',['supports' => $supports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('user.Support_Contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $supports = new Support();
        $supports->team_name = $request->team_name;
        $supports->mailing = $request->mailing;
        $supports->number = $request->number;
        $supports->comments = $request->comments;
        $supports->save();

        return redirect()->route('support_contacts.show',$supports->id)->with('store', 'Support was saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $supports = Support::findOrFail($id);
        return view('user.Support_Contacts.show')->withSupports($supports);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $supports = Support::where('id',$id)->first();
        return view('user.Support_Contacts.edit')->withSupports($supports);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $supports = Support::findOrFail($id);
        $supports->team_name = $request->team_name;
        $supports->mailing = $request->mailing;
        $supports->number = $request->number;
        $supports->comments = $request->comments;
        $supports->save();

        return redirect()->route('support_contacts.show',$id)->with('update', 'Support was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Support::destroy($request->id);
    }
}
