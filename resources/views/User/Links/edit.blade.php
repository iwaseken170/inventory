@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit Link
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Link Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('links.update', $links->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="kb_id">Application:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('application') }}" name="application" id="application" value="{{$links->application}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="link">Link:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('link') }}" name="link" id="link" value="{{$links->link}}">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="span4">
                                            <label for="comments">Comments:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('comments') }}" name="comments" id="comments" value="{{$links->comments}}">
                                        </div>
                                    </div>

                                </div>
                            
                            </div>
                            <!-- /.box-body -->
                            <br>
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-edit"></i> Save Changes to Link</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection






