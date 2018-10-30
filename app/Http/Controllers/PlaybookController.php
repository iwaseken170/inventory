<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playbook;

class PlaybookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $playbook = Playbook::all();
        return view('user.playbook.index',['playbook' => $playbook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('user.playbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $playbook = new Playbook();
        $playbook->error = $request->error;
        $playbook->resolution = $request->resolution;
        $playbook->comments = $request->comments;
        $playbook->save();

        //return view('user.playbook.show');
        return redirect()->route('playbook.show',$playbook->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $playbook = Playbook::findOrfail($id);
        return view('user.playbook.show')->withPlaybook($playbook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $playbook = Playbook::where('id',$id)->first();
        return view('user.playbook.edit')->withPlaybook($playbook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $playbook = Playbook::findOrfail($id);
        $playbook->error = $request->error;
        $playbook->resolution = $request->resolution;
        $playbook->comments = $request->comments;
        $playbook->save();

         return redirect()->route('playbook.show', $id);
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Playbook::destroy($request->id);
    }
}
