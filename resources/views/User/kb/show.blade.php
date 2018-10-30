@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View KB Details
                    </h2></legend>
            </section>
                @if (session('status'))
                    <div class="alert alert-success text-center">
                        <button class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('status') }}</strong>
                    </div>
  
                @endif 
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">KB list</div>               
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('kb.edit', $kb->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$kb->id}}"><i class="icon icon-edit"></i> Edit KB</button></a>
                            </div>
                        </div>

                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">KB id</label>
                                    <pre>{{$kb->kb_id}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <pre>{{$kb->title}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Assignment</label>
                                    <pre>{{$kb->product}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Comments</label>
                                    <pre>{{$kb->comments}}</pre>
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


