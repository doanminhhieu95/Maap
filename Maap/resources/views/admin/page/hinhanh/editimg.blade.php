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
            <li class="active">Edit image</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err) {{$err}}
            <br/> @endforeach
        </div>
        @endif
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
                    <form role="form" action="{{route('edithinhanh')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="product-name">Image
                                    <span class="required"></span>
                                </label>
                                <input type="file" name="image" size=20 id="image" required spellcheck="false" />
                                <div id="image-holder"></div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input type="hidden" value="{{$hinhanh->id}}" name="idhinhanh"/>
                        <input type="hidden" value="image" name="edit"/>
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
<script>
$("#image").on('change', function () {

//Get count of selected files
var countFiles = $(this)[0].files.length;

var imgPath = $(this)[0].value;
var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
var image_holder = $("#image-holder");
image_holder.empty();

if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
    if (typeof (FileReader) != "undefined") {

        //loop for each file selected for uploaded.
        for (var i = 0; i < countFiles; i++) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                        "class": "thumb-image"
                }).appendTo(image_holder);
            }

            image_holder.show();
            reader.readAsDataURL($(this)[0].files[i]);
        }

    } else {
        alert("This browser does not support FileReader.");
    }
} else {
    alert("Pls select only images");
}
});
</script>
<!-- /.content-wrapper -->
@endsection