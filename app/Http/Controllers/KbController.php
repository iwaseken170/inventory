<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kb;
use LaraFlash;

class KbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $knowledge = Kb::all();    
        return view('user.Kb.index',['knowledge' => $knowledge]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('user.kb.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $this->validateWith([
            'kb_id' => 'required|max:255|unique:kb',
            'title' => 'required|max:255',
            'product' => 'required|max:255',
        ]);

        $kb = new KB();
        $kb->kb_id = $request->kb_id;
        $kb->title = $request->title;
        $kb->product = $request->product;
        $kb->comments = $request->comments;
        $kb->save();  
        $message = new MessageBag(['password' => ['Successfully Logged in!']]);
        return redirect()->route('kb.show',$kb->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id){
        
        $kb = Kb::findOrfail($id);
        //return view('user.kb.show')->withKb($kb);
        if($request->redirected) LaraFlash::new()->content('KB Updated')->title('Success')->type('success');
        return view('user.kb.show')->withKb($kb);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $kb = Kb::where('id',$id)->first();
        return view('user.kb.edit')->withKb($kb);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
     

         $kb = Kb::findOrfail($id);
         $kb->kb_id = $request->kb_id;
         $kb->title = $request->title;
         $kb->product = $request->product;
         $kb->comments = $request->comments;
         $kb->save(); 
         //return redirect()->route('kb.show', $id);
         return redirect()->action(
        'KbController@show', ['id' => $id, 'redirected' => 'true']
         )->with('status', 'KB was added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Kb::destroy($request->id);
        return response(['msg' => 'Template deleted', 'status' => 'success']);
    }
}
