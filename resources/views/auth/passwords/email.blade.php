@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container" id="login">

        <form action="{{route('password.email')}}" method="POST" class="form-signin">
            {{csrf_field()}}
            <h2 class="form-signin-heading">Forgot Password?</h2>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)

                    <div class="alert alert-danger text-center">
                        {{$error}}
                    </div>

                @endforeach
            @endif
            <input type="text" class="input-block-level {{$errors->has('email') ? 'is-danger' : ''}}" name="email" placeholder="name@example.com" value="{{old('email')}}" required>
            @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
            <button class="btn btn-large btn-primary btn-block" type="submit">Get Reset Link</button>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="icon-arrow-left"></i> Back to Login</a></h5>


        </form>

    </div> <!-- /container -->
@endsection
