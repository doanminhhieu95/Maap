@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu Tables<small></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li>
                <a href="#">Tables</a>
            </li>
            <li class="active">Quản lý Người dùng</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('thanhcong'))
        <div class="alert alert-success">
            {{session('thanhcong')}}
        </div>
        @endif @if(Session::has('edit'))
        <div class="alert alert-success">
            {{session('edit')}}
        </div>
        @endif 
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Menu</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>url</th>
                                    <th>Menu</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hinhanhs as $hinhanh)
                                <tr>
                                    <td>{{$hinhanh->id}}</td>
                                    <td>
                                        <img src="AdminLTE/dist/img/image/{{$hinhanh->name}}" height="100"/>
                                        {{$hinhanh->name}}
                                        <a href="/hinh-anh/edit?hinhanh={{$hinhanh->id}}">Edit</a>
                                    </td>
                                    <td>
                                        {{$hinhanh->url}}
                                        <a href="/hinh-anh/edit?url={{$hinhanh->id}}">Edit</a>
                                    </td>
                                    <td>
                                        {{$hinhanh->menu->name}}
                                        <a href="/hinh-anh/edit?menu={{$hinhanh->id}}">Edit</a>
                                    </td>
                                    <td>
                                        <button class="delete-modal btn btn-danger btn-xs" data-id="{{$hinhanh->id}}" data-name="{{$hinhanh->name}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="deleteContent">
                    Are you Sure you want to delete
                    <span class="dname"></span>
                    <span class="did"></span>?
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer_action_button" class='glyphicon'> </span>
                </button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    <span class='glyphicon glyphicon-remove'></span> Close
                </button>
            </div>
            <input type="hidden" value="deletehinhanh" id="delete"/>
        </div>
    </div>
</div>

<script src="{{ asset('js/app1.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@endsection