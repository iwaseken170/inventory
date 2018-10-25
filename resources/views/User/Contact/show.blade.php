@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')
    <div class="span9" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        View Contact Details
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Contact list</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                            </div>
                            <div class="btn-group pull-right">
                                <a href="{{route('contact.edit', $contact->id)}}"><button class="pull-right btn btn-info btn-delete-pet btn-md" data-id="{{$contact->id}}"><i class="icon icon-edit"></i> Edit Contact</button></a>
                            </div>
                        </div>

                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fullname</label>
                                    <pre>{{$contact->fullname}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Extension</label>
                                    <pre>{{$contact->extension}}</pre>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Number</label>
                                    <pre>{{$contact->number}}</pre>
                                </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Location</label>
                                    <pre>{{$contact->location}}</pre>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Comments</label>
                                    <pre>{{$contact->comments}}</pre>
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


