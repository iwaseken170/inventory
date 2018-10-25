@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('content')

    <div class="span7" id="content">
        <div class="row-fluid">
            <section class="content-header">
                <legend><h2>
                        Create Permission
                    </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">   Permission Details</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="{{route('permissions.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="span8">

                                    <div class="control-group">
                                        <div class="span4">
                                            <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic Permission</b-radio>
                                        </div>
                                        <div class="span4">
                                            <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD Permission</b-radio>
                                        </div>
                                    </div>

                                <br><br>

                                        <div class="control-group" v-if="permissionType == 'basic'">
                                            <div class="span4">
                                                <label for="display_name">Name (Display Name)</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="span7 form-control text-info {{ $errors->first('display_name') }}" name="display_name" id="display_name" value="{{old('display_name')}}">
                                            </div>
                                        </div>

                                        <div class="control-group" v-if="permissionType == 'basic'">
                                            <div class="span4">
                                                <label for="name">Slug (Display Name)</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="span7 form-control text-info {{ $errors->first('name') }}" name="name" id="name" value="{{old('name')}}">
                                            </div>
                                        </div>

                                        <div class="control-group" v-if="permissionType == 'basic'">
                                            <div class="span4">
                                                <label for="description">Description</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="span7 form-control text-info {{ $errors->first('description') }}" name="description" id="description" value="{{old('description')}}" placeholder="Describe the permission does">
                                            </div>
                                        </div>

                                        <div class="control-group" v-if="permissionType == 'crud'">
                                            <div class="span4">
                                                <label for="description">Resource</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="span7 form-control text-info {{ $errors->first('description') }}" name="resource" id="resource" value="{{old('description')}}" placeholder="The name of the resource" v-model="resource">
                                            </div>
                                        </div>

                                    <div class="control-group" v-if="permissionType == 'crud'">

                                            <div class="field">
                                                <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
                                            </div>
                                            <div class="field">
                                                <b-checkbox v-model="crudSelected" v-model="crudSelected" native-value="read">Read</b-checkbox>
                                            </div>
                                            <div class="field">
                                                <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
                                            </div>
                                            <div class="field">
                                                <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
                                            </div>

                                        <input type="hidden" name="crud_selected" :value="crudSelected">

                                        <div class="control-group">
                                            <table class="table" v-if="resource.length >= 3 && crudSelected.length > 0">
                                                <thead>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                                </thead>
                                                <tbody>
                                                <tr v-for="item in crudSelected">
                                                    <td v-text="crudName(item)"></td>
                                                    <td v-text="crudSlug(item)"></td>
                                                    <td v-text="crudDescription(item)"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                            <!-- /.box-body -->
                            <div class="span12">
                                <button class="span6 btn btn-success pull-right btn-md"><i class="icon icon-plus"></i> Create New Permission</button>
                            </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        var app = new Vue({
            el: '#manage',
            data: {
                permissionType: 'basic',
                resource: '',
                crudSelected: ['create', 'read', 'update', 'delete']
            },
            methods: {
                crudName: function(item) {
                    return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                },
                crudSlug: function(item) {
                    return item.toLowerCase() + "-" + app.resource.toLowerCase();
                },
                crudDescription: function(item) {
                    return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
                }
            }
        });
    </script>
@endsection



