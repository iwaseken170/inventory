@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit KB#{{ucwords($kb->kb_id)}}
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Role Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('kb.update', $kb->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="kb_id">KB id:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('kb_id') }}" name="kb_id" id="kb_id" value="{{$kb->kb_id}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="title">Title:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('title') }}" name="title" id="title" value="{{$kb->title}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="product">Product Assignment:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('product') }}" name="product" id="product" value="{{$kb->product}}">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="span4">
                                            <label for="comments">Comments:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('comments') }}" name="comments" id="comments" value="{{$kb->comments}}">
                                        </div>
                                    </div>

                                </div>
                            
                            </div>
                            <!-- /.box-body -->
                            <br>
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-edit"></i> Save Changes to KB</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection






