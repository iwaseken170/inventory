@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit User
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">User Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('users.update', $user->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="name">Name:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('name') }}" name="name" id="name" value="{{$user->name}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="email">Username:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('email') }}" name="email" id="email" value="{{$user->email}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="password">Password:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="control-group">
                                                <b-radio name="password_options" v-model="password_options" native-value="keep">Do Not Change Password</b-radio>
                                            </div>
                                            <div class="control-group">
                                                <b-radio name="password_options" v-model="password_options" native-value="auto">Auto-Generate New Password</b-radio>
                                            </div>
                                            <div class="control-group">
                                                <b-radio name="password_options" v-model="password_options" native-value="manual">Manually Set New Password</b-radio>
                                                <p class="control">
                                                    <input type="password" class="form-control text-info" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user" required>
                                                </p>
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
                                <button class="pull-right btn btn-success btn-delete-pet btn-md" data-id=""><i class="icon icon-edit"></i> Edit User</button>
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
                password_options: 'keep',
                rolesSelected: {!! $user->roles->pluck('id') !!}
            }
        });
    </script>
@endsection




