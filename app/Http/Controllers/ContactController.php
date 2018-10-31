<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $contacts = Contact::all();
        return view('user.contact.index',['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('user.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $contacts = new Contact();
        $contacts->fullname = $request->fullname;
        $contacts->extension = $request->extension;
        $contacts->number = $request->number;
        $contacts->location = $request->location;
        $contacts->comments = $request->comments;
        $contacts->save();

        return redirect()->route('contact.show',$contacts->id)->with('store', 'Contact was saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $contact = Contact::findOrFail($id);
        return view('user.contact.show')->withContact($contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $contact = Contact::findOrFail($id);
        return view('user.contact.edit')->withContact($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $contact = Contact::where('id',$id)->first();
        $contact->fullname = $request->fullname;
        $contact->extension = $request->extension;
        $contact->number = $request->number;
        $contact->location = $request->location;
        $contact->comments = $request->comments;
        $contact->save();

        return redirect()->route('contact.show',$id)->with('update', 'Contact was updated');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        
        Contact::destroy($request->id);
    }
}
