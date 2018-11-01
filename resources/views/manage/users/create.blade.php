@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

<style type="text/css">
    .student-photo{
        height: 120px;
        padding-left: 1px;
        padding-right: 1px;
        border: 1px solid #ccc;
        background:#eee;
        width: 120px;
        margin: 0 auto;

    }
    .photo > input[type='file']{
        display:none;
    }
    .photo{
        width: 50px;
        height: 50px;
        border-radius: 100%;
    }
    .student-id{
        background-repeat: repeat-x;
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border-bottom: 1px solid #ccc;
    }
    .btn-browse{
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border:none;
        border-top: 1px solid #ccc;
    }
</style>


    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Create User
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">User Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('users.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="name">Name:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('name') }}" name="name" id="name">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="email">Username:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('email') }}" name="email" id="email">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="password">Password:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="control-group">
                                                <input type="password" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
                                                <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <!-- checkbox -->
                                    <div class="control-group">
                                        <div class="col-sm-12">
                                            <label for="roles">Roles:</label>
                                        </div>
                                        <div class="col-sm-12 col-offset-2">
                                            <input type="hidden" name="roles" :value="rolesSelected" />
                                            @foreach ($roles as $role)
                                                <div class="control-group">
                                                    <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="span11">
                                <button class="pull-right btn btn-success btn-delete-pet btn-md" data-id=""><i class="icon icon-user"></i> Create User</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>


@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        var app = new Vue({
            el: '#manage',
            data: {
                auto_password: true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
            }
        });
    </script>
@endsection



