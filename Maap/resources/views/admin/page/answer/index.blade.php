@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu Tables<small></small>
        </h1>
        <ol class="breadcrumb">
            <i class="fa fa-th"></i>
            <li class="active">Answer</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Answer</h3>
                        <div class="form-group" style="width:200px;">
                            <select class="form-control" name="type" id="type">
                                <option value="all">All</option>
                                <option value="waiting">Not seen</option>
                                <option value="seen">Seen</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="answer">
                        
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
        </div>
        <input type="hidden" value="deletecautraloi" id="delete"/>
    </div>
</div>
<script>
    $(document).ready(function (){
        var type = $('#type').val();
        $.get("cautraloi/ajax/type/" + type, function (data) {
            $("#answer").html(data);
        });
        $("#type").change(function (){
            var type = $(this).val();
            $.get("cautraloi/ajax/type/" + type, function (data) {
                $("#answer").html(data);
            });
        });
    });
</script>
@endsection