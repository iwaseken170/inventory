<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escalation;

class EscalationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $esc = Escalation::all();
        return view('user.escalation.index',['esc' => $esc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view ('user.escalation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $escalation = new Escalation();
        $escalation->application = $request->application;
        $escalation->support_ba = $request->support_ba;
        $escalation->support_clrk = $request->support_clrk;
        $escalation->site = $request->site;
        $escalation->prod_assignment = $request->prod_assignment;
        $escalation->comments = $request->comments;
        $escalation->save();

         return redirect()->route('escalation.show',$escalation->id)->with('store', 'Escalation was saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $esc = Escalation::findOrFail($id);
        return view('user.escalation.show')->withEscalation($esc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $esc = Escalation::where('id',$id)->first();
        return view('user.escalation.edit')->withEscalation($esc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $escalation = Escalation::findOrFail($id);
        $escalation->application = $request->application;
        $escalation->support_ba = $request->support_ba;
        $escalation->support_clrk = $request->support_clrk;
        $escalation->site = $request->site;
        $escalation->prod_assignment = $request->prod_assignment;
        $escalation->comments = $request->comments;
        $escalation->save();

        return redirect()->route('escalation.show',$escalation)->with('update', 'Escalation was updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Escalation::destroy($request->id);
    }
}
