@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Support Contacts 
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Support Contact Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('support_contacts.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="team_name">Team name:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('team_name') }}" name="team_name" id="team_name">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="mailing">Mailing:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('mailing') }}" name="mailing" id="mailing">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="col-sm-1">
                                            <label for="product">Number:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-info {{ $errors->first('number') }}" name="number" id="number">
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
                                <button class="pull-right btn btn-success btn-delete-pet btn-md"><i class="icon icon-plus"></i> Add Support Contacts</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->

        </div>
    </div>
@endsection




