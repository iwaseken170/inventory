<div class="modal fade" id="create-user-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-default" id="myModalLabel"></h4>
            </div>

            <div class="modal-body">
                <form action="{{ url('createUser') }}" method="post" id="userForm" enctype="multipart/form-data">
                    <div class="row form-group ">
                        <div class="col-sm-3">
                            <label class="text-info" >Photo:</label>
                        </div>
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
                                        <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;background: #ddd;">
                                        <input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="Browse">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >Name:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-info {{ $errors->first('name') }}" name="name" id="name">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >Username:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-info {{ $errors->first('username') }}" name="username" id="username">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >email:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="email" class="form-control text-info {{ $errors->first('email') }}" name="email" id="email">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >Password:</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control text-info {{ $errors->first('password') }}" name="password" id="password">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >Roles:</label>
                        </div>
                        <div class="col-sm-9">
                            <select id="role_id" name="role_id">
                                <option value="0">---------</option>
                                @foreach($roles as $key => $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="text-info" >Status:</label>
                        </div>
                        <div class="col-sm-9">
                            <select id="active" name="active">
                                <option value="">---------</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                                <option value="2">Blocked</option>

                            </select>
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="id" id="id" value="">
                            <button type="submit" class="btn btn-success btn-sm" value="Save" id="save">
                                <span class="glyphicon glyphicon-plus"></span> ADD
                            </button>
                        </div>

                        <button type="reset" value="Clear" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove-circle"></span> CLEAR
                        </button>
<br><br>

                        <div class="col-lg-7 col-lg-offset-3 alert alert-warning alert-dismissible print-error-msg" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul class="text-center"></ul>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>