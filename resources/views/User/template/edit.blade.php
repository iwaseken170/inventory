@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit Template
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Template Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('template.update', $template->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="concern">Concern: </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('concern') }}" name="concern" id="concern" value="{{$template->concern}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="response">Response:</label>
                                        </div>
                                         <div class="col-sm-9">
                                            <textarea name='response' class="span7 form-control" rows='6'>{{$template->response}}</textarea>
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="span4">
                                            <label for="comments">Comments:</label>
                                        </div>
                                       <div class="col-sm-9">
                                            <textarea name='comments' class="span7 form-control" rows='6'>{{$template->comments}}</textarea>
                                        </div>
                                    </div>

                                </div>
                            
                            </div>
                            <!-- /.box-body -->
                            <br>
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-edit"></i> Save Changes to Template</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection






