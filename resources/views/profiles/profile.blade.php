@extends('layouts.master')

@section('content')
    <style type="text/css">
        .student-photo{
            height: 120px;
            padding-left: 1px;
            padding-right: 1px;
            border: 1px solid #ccc;
            background:#eee;
            width: 120px;
            margin: 0 auto;

        }
        .photo > input[type='file']{
            display:none;
        }
        .photo{
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }
        .student-id{
            background-repeat: repeat-x;
            border-color: #ccc;
            padding: 5px;
            text-align: center;
            background: #eee;
            border-bottom: 1px solid #ccc;
        }
        .btn-browse{
            border-color: #ccc;
            padding: 5px;
            text-align: center;
            background: #eee;
            border:none;
            border-top: 1px solid #ccc;
        }
    </style>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(count($errors) > 0)
                         <div class="alert alert-danger">
                             @foreach($errors->all() as $error)
                                 <ul>
                                    <li align="center">{{$error}}</li>
                                 </ul>
                             @endforeach
                            </div>
                @endif

                @if(session('response'))
                    <div class="alert alert-success"><p align="center">{{session('response')}}</p></div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        <form action="{{route('manage.addProfile')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category" class="col-md-3 control-label">Profile Pic:</label>
                                    <div class="col-sm-9">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="student-id"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="photo">
                                                    {!! Html::image('avatar/default.png',null,['class'=>'student-photo','id'=>'showPhoto']) !!}
                                                    <input type="file" name="profile_pic" id="profile_pic" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center;background: #ddd;">
                                                    <input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="Browse">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category" class="col-md-3 control-label">Enter Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control {{ $errors->first('name') }}" id="name" placeholder="name" value="{{old('name')}}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-md-3 control-label">Enter Designation:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="designation" class="form-control {{ $errors->first('designation') }}" id="designation" placeholder="designation" value="{{old('designation')}}" required >
                                    </div>
                                </div>



                            </div>
                            <!-- /.box-body -->

                            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-fw fa-plus"></i> Create</button>
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $('#browse_file').on('click',function(){
            $('#profile_pic').click();
        })
        $('#profile_pic').on('change',function(e){
            showFile(this,'#showPhoto');
        })

        function showFile(fileInput,img,showName){
            if(fileInput.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $(img).attr('src',e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
            $(showName).text(fileInput.files[0].name)
        };
    </script>

@endsection