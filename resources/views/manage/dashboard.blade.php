@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <ul>
                                <li align="center">{{$error}}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif

                @if(session('response'))
                    <div class="alert alert-success"><p align="center">{{session('response')}}</p></div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="col-md-4">
                            <img src="{{url(('/avatar/' . Auth::user()->photo))}}" height="100px" width="100px" class="img-circle" alt="User Image">
                            <p class="lead"></p>
                        </div>
                        <div class="col-md-8">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection