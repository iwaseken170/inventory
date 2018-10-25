@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Edit Support Contacts
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Support Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('support_contacts.update', $supports->id)}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">
                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="support">Team Name:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('team_name') }}" name="team_name" id="team_name" value="{{$supports->team_name}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="mailing">Mailing:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('mailing') }}" name="mailing" id="mailing" value="{{$supports->mailing}}">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="span4">
                                            <label for="numer">Number:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('number') }}" name="number" id="nnumber" value="{{$supports->number}}">
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <div class="span4">
                                            <label for="comments">Comments:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="span7 form-control text-info {{ $errors->first('comments') }}" name="comments" id="comments" value="{{$supports->comments}}">
                                        </div>
                                    </div>

                                </div>
                            
                            </div>
                            <!-- /.box-body -->
                            <br>
                            <div class="span11">
                                <button class="btn btn-success pull-right btn-md"><i class="icon icon-edit"></i> Save Changes to Support</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection






