<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $templates = Template::all();
        return view('user.template.index',['templates' => $templates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('user.template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $template = new Template();
        $template->concern = $request->concern;
        $template->response = $request->response;
        $template->comments = $request->comments;
        $template->save();

        return redirect()->route('template.show',$template->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $template = Template::findOrFail($id);
        return view('user.template.show')->withTemplate($template);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $template = Template::where('id',$id)->first();
        return view('user.template.edit')->withTemplate($template);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $template = Template::findOrFail($id);
        $template->concern = $request->concern;
        $template->response = $request->response;
        $template->comments = $request->comments;
        $template->save();

        return view('user.template.show')->withTemplate($template);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Template::destroy($request->id);
    }
}
