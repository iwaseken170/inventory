@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Knowledge Base
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Kb Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('kb.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="kb_id">Kb ID:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('kb_id') }}" name="kb_id" id="kb_id">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="title">Title:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('title') }}" name="title" id="title">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="product">Product Assignement:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('product') }}" name="product" id="product">
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
                                <button class="pull-right btn btn-success btn-delete-pet btn-md"><i class="icon icon-plus"></i> Add Kb</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection




