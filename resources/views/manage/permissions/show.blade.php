@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Permission Details
                    </h2></legend>
            </section>

                 @if (session('update'))
                    <div class="alert alert-info text-center">
                        <button class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('update') }}</strong>
                    </div>
               @elseif (session('store'))
                      <div class="alert alert-success text-center">
                        <button class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('store') }}</strong>
                    </div>

                @endif 
                
            <div class="well">
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <h2 class="title">{{$permission->display_name}}<small><em> ({{$permission->name}})</em></small></h2>

                                <h3 class="title">{{$permission->description}}</h3>

                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('permissions.edit', $permission->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$permission->id}}"><i class="icon icon-edit"></i> Edit Permission</button></a>
                            </div>
                        </div>

                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection


