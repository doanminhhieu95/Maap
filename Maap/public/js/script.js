$(document).ready(function () {
    var a;
    $(document).on('click', '.delete-modal', function () {
        $('#footer_action_button').text("Delete");
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.dname').html($(this).data('name'));
        $('.deleteContent').show();
        $('#myModal').modal('show');
        a = $(this);
    });
    $('.modal-footer').on('click', '.delete', function () {
        var link = $('#delete').val();
        $.ajax({
            type: 'get',
            url: '/'+link,
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function (data) {
                // a.parent().parent().remove();
                if(data=="1"){
                    alert("Can not delete the last admin");
                }
                else a.parent().parent().remove();
            }
        });
    });
});