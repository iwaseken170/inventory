@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Playbook Details
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

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Playbook list</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('playbook.edit', $playbook->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$playbook->id}}"><i class="icon icon-edit"></i> Edit Playbook</button></a>
                            </div>
                        </div>

                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">KB id</label>
                                    <pre>{{$playbook->error}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <pre>{{$playbook->resolution}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Comments</label>
                                    <pre>{{$playbook->comments}}</pre>
                                </div>
                              
                            </div>
                            <!-- /.box-body -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection


