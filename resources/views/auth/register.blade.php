@extends('layouts.app')

@section('content')



    <div class="container" id="login">
        <form class="form-signin" action="{{route('register')}}" method="post">
            {{csrf_field()}}
            <h2 class="form-signin-heading">Register</h2>
            <input type="text" class="input-block-level {{$errors->has('name') ? 'is-danger' : ''}}" placeholder="Name" name="name" value="{{old('name')}}" required>
            @if ($errors->has('name'))
                <p class="alert-danger">{{$errors->first('name')}}</p>
            @endif
            <input type="text" class="input-block-level {{$errors->has('email') ? 'is-danger' : ''}}" placeholder="Username" name="email" value="{{old('email')}}" required>
            @if ($errors->has('name'))
                <p class="alert-danger">{{$errors->first('email')}}</p>
            @endif
            <input type="password" class="input-block-level {{$errors->has('password') ? 'is-danger' : ''}}" placeholder="Password" name="password">
            @if ($errors->has('name'))
                <p class="alert-danger">{{$errors->first('password')}}</p>
            @endif

            <button class="btn btn-large btn-primary btn-block" type="submit">Register</button>
            <h5><a href="{{route('login')}}">Already have an Account?</a></h5>

        </form>

    </div> <!-- /container -->



@endsection
