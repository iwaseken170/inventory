@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="span9" id="content">
        <div class="row-fluid">
            <!-- block -->
            <section class="content-header">
                <legend><h2>
                        Manage Roles
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Role list</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="btn-group">
                            <a href="{{route('roles.create')}}"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Create Role </button></a>
                        </div>
                    <hr>
                        <div class="table-toolbar">

                                @foreach ($roles as $role)
                                    <div class="span4">
                                        <div class="well">
                                        <div class="block-content collapse in">
                                            <div class="span12" style="padding-bottom:30px;">
                                                <!-- / button groups -->
                                                <h3>{{ucwords($role->display_name)}}</h3>
                                                <h4>{{ucwords($role->name)}}</h4>
                                                <div style="margin-top:10px;">
                                                    <p>{{$role->description}}</p>
                                                    <p>
                                                        <a href="{{route('roles.show', $role->id)}}"><button class="btn" data-id="{{$role->id}}"><i class="icon-eye-open"></i> View</button></a>
                                                       <a href="{{route('roles.edit', $role->id)}}"><button class="btn btn-info" data-id="{{$role->id}}"><i class="icon icon-edit"></i> Update</button></a>
                                                    </p>
                                                </div>


                                            </div>
                                        </div>
                                        </div>
                                            </div>
                                @endforeach
                            </div>
                        </div>


                        </div>


                    </div>
                </div>
            </div>
            <!-- /block -->




@endsection

@section('script')

@endsection
