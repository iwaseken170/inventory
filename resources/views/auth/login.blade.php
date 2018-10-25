@extends('layouts.app')

@section('content')
    <!--/span-->

    <div class="container" id="login">

        <form action="{{route('login')}}" method="POST" class="form-signin">
            {{csrf_field()}}
            <h2 class="form-signin-heading">Please Sign In</h2>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)

                    <div class="alert alert-error text-center">
                        <button class="close" data-dismiss="alert">x</button>
                        <strong>{{$error}}</strong>
                    </div>

                @endforeach
            @endif
            <input type="text" class="input-block-level {{ $errors->first('email') }}" name="email" placeholder="username" required>
            <input type="password" class="input-block-level {{ $errors->first('password') }}" name="password" placeholder="Password" required>
            <label class="checkbox">
                <b-checkbox name="remember_token" class="m-t-20">Remember Me</b-checkbox>
            </label>
            <button class="btn btn-large btn-primary btn-block" type="submit">Sign in</button>
            <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a></h5>

        </form>

    </div> <!-- /container -->

@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        var app = new Vue({
            el: '#manage'
        });
    </script>
@endsection