@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{$menuu->name}}
            <small>Menu</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> Menu</a>
            </li>
            <li>
                <a href="{{route('imgmenu',$menuu->id)}}">{{$menuu->name}}</a>
            </li>
            <li class="active">Edit position</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit image</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('edithinhanh')}}" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label for="exampleInputPassword1">Position</label>
                            <select class="form-control" id="position" name="position" style="width:200px;">
                            @for($i=1;$i<5;$i++)
                                <option 
                                @if($hinhanh->vitri == $i)
                                {{"Selected"}}
                                @endif
                                value="{{$i}}">{{$i}}</option>
                            @endfor
                            </select>
                        </div>
                        <input type="hidden" value="{{$hinhanh->id}}" name="idhinhanh" />
                        <input type="hidden" value="vitri" name="edit" />
                        <input type="hidden" value="{{$menuid}}" name="menuid"/>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection