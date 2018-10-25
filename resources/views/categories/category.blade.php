@extends('layouts.master')
@section('sidebar')
    @include('_includes.sidebar')
@endsection
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger"><p align="center">{{$error}}</p></div>
                        @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success"><p align="center">{{session('response')}}</p></div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Category Form</div>
                    <div class="panel-body">
                        <form action="{{route('manage.addCategory')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                          <div class="box-body">
                            <div class="form-group">
                              <label for="category" class="col-md-3 control-label">Enter Category</label>

                              <div class="col-sm-9">
                                <input type="text" name="category" class="form-control {{ $errors->first('category') }}" id="category" placeholder="category" value="{{old('category')}}" required autofocus>
                              </div>
                            </div>

                          </div>
                            <!-- /.box-body -->

                            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-fw fa-plus"></i> Create</button>

                            <!-- /.box-footer -->
                        </form>
                </div>
                    </div>
                </div>
            </div>
        </div>


@endsection