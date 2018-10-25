@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Contact Support Details
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Support list</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('support_contacts.edit', $supports->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$supports->id}}"><i class="icon icon-edit"></i> Edit Contact Support</button></a>
                            </div>
                        </div>

                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Team Name</label>
                                    <pre>{{$supports->team_name}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mailing</label>
                                    <pre>{{$supports->mailing}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Number</label>
                                    <pre>{{$supports->number}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Comments</label>
                                    <pre>{{$supports->comments}}</pre>
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


