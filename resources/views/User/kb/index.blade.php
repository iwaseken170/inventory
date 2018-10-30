@extends('layouts.app')

@section('sidebar')
    @include('_includes.navigation.aside')
@endsection

@section('style')
    <link href="{{asset('assets/DT_bootstrap.css')}}" rel="stylesheet" media="screen">
    @endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="span9" id="content">
        <div class="row-fluid">
            <!-- block -->
            <section class="content-header">
                <legend><h2>
                    Knowledge Base
                </h2></legend>
            </section>

            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">KB List</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <a href="{{route('kb.create')}}"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Add KB</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>Kb Id</th>
                                <th>Title</th>
                                <th>Product Assignment</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($knowledge as $key => $kb)
                                <tr id="kb{{$kb->id}}">
                                    <td>{{$kb->kb_id}}</td>
                                    <td>{{$kb->title}}</td>
                                    <td>{{$kb->product}}</td>
                                    <td style="text-align: center; vertical-align:middle;width:190px">
                                        <a href="{{route('kb.show', $kb->id)}}"><button class="btn btn-default btn-edit-pet btn-mini"  data-id="{{$kb->id}}"><i class="icon-eye-open"></i> View</button></a>
                                        <a href="{{route('kb.edit', $kb->id)}}"><button class="btn btn-info btn-edit-pet btn-mini"  data-id="{{$kb->id}}"><i class="icon-edit"></i> Edit</button></a>
                                        <button class="btn btn-danger btn-delete-kb btn-mini btn-delete-file" data-id="{{$kb->id}}"><i class="icon-trash"></i> Del</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/scripts.js')}}"></script>
    <script src="{{asset('assets/DT_bootstrap.js')}}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })

        $('tbody').delegate('.btn-delete-kb','click',function(){
            var value = $(this).data('id');
            var url = '{{URL::to('manage/deleteKB')}}';
            if(confirm('Are you sure to delete?')==true){
                $.ajax({
                type : 'post',
                url :url,
                data : {'id':value},
                success:function(data){
                window.location.reload();
                }
            });
            }
        });
    </script>
@endsection

