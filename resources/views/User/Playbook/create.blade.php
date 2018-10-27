@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Automation Playbook
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Playbook Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('playbook.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="kb_id">Error:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('error') }}" name="error" id="error">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="title">Resolution:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('resolution') }}" name="resolution" id="resolution">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="comments">Comments:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('comments') }}" name="comments" id="comments">
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                            <!-- /.box-body -->
                            <div class="span11">
                                <button class="pull-right btn btn-success btn-delete-pet btn-md"><i class="icon icon-plus"></i> Add Playbbok</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection




