@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Role Details
                    </h2></legend>
            </section>

            <div class="well">
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <h2 class="title">{{$role->display_name}}<small><em> ({{$role->name}})</em></small></h2>
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('roles.edit', $role->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$role->id}}"><i class="icon-refresh icon-white"></i> Edit Role</button></a>
                            </div>
                        </div>
                            <div class="box-body">
                                <h5>{{$role->description}}</h5>
                                <h3 class="title">Permissions:</h3>
                                    <ul>
                                        @foreach ($role->permissions as $r)
                                            <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                                        @endforeach
                                    </ul>
                            </div>
                            <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection


