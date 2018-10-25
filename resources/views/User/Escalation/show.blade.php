@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Escalation Details
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Escalation list</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('escalation.edit', $escalation->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$escalation->id}}"><i class="icon icon-edit"></i> Edit Escalation</button></a>
                            </div>
                        </div>

                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Application</label>
                                    <pre>{{$escalation->application}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Site</label>
                                    <pre>{{$escalation->site}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Support (BA)</label>
                                    <pre>{{$escalation->support_ba}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Support (CLRK)</label>
                                    <pre>{{$escalation->support_clrk}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Assignment</label>
                                    <pre>{{$escalation->prod_assignment}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Comments</label>
                                    <pre>{{$escalation->comments}}</pre>
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


