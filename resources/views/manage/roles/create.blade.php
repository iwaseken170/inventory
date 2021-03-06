@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Create Role
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">   Role Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('roles.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="name">Name(Human Readable): </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('display_name') }}" name="display_name" id="display_name" value="{{old('display_name')}}">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="email">Slug(Cannot be edited):</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('name') }}" name="name" id="name" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="email">Description:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('description') }}" name="description" id="description" value="{{old('description')}}">
                                        </div>
                                        <input type="hidden" :value="permissionsSelected" name="permissions">
                                    </div>
                                </div>
                                <div class="span4">
                                    <!-- checkbox -->
                                    <div class="control-group">
                                        <div class="col-sm-12">
                                            <h5 class="title">Permissions:</h5>
                                        </div>
                                        <div class="col-sm-12 col-offset-2">
                                            @foreach ($permissions as $permission)
                                                <div class="field">
                                                    <b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-plus"></i> Create New Role</button>
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
                permissionsSelected: []
            }
        });

    </script>
@endsection



