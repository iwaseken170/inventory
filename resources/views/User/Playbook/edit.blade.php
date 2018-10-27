@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit Playbook
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Playbook Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('playbook.update', $playbook->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="error">Error:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('error') }}" name="error" id="error" value="{{$playbook->error}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="resolution">Resolution:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('resolution') }}" name="resolution" id="resolution" value="{{$playbook->resolution}}">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="span4">
                                            <label for="comments">Comments:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('comments') }}" name="comments" id="comments" value="{{$playbook->comments}}">
                                        </div>
                                    </div>

                                </div>
                            
                            </div>
                            <!-- /.box-body -->
                            <br>
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-edit"></i> Save Changes to Playbook</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection






