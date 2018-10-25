@extends('layouts.app')

@section('sidebar')
	@role('user')
    	@include('_includes.navigation.aside')
    @endrole	
@endsection