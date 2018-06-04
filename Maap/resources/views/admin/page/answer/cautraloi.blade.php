<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Answer 1</th>
            <th>Answer 2</th>
            <th>Answer 3</th>
            <th>Answer 4</th>
            <th>Answer 5</th>
            <th>Answer 6</th>
            <th>Answer 7</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cautralois as $cautraloi)
        <tr>
            <td>{{$cautraloi->id}}</td>
            <td>{{$cautraloi->email}}</td>
            <td>{{$cautraloi->diachi}}</td>
            <td>{{$cautraloi->phone}}</td>
            <td>{{$cautraloi->traloi1}}</td>
            <td>{{$cautraloi->traloi2}}</td>
            <td>{{$cautraloi->traloi3}}</td>
            <td>{{$cautraloi->traloi4}}</td>
            <td>{{$cautraloi->traloi5}}</td>
            <td>{{$cautraloi->traloi6}}</td>
            <td>{{$cautraloi->traloi7}}</td>
            <td>
                <button class="delete-modal btn btn-danger btn-xs" data-id="{{$cautraloi->id}}" data-name="{{$cautraloi->email}}">
                    <span class="glyphicon glyphicon-trash"></span> Delete
                </button>
            @if($cautraloi->seen == 0)
                <button class="btn btn-success btn-xs seen" data-id="{{$cautraloi->id}}" data-name="{{$cautraloi->email}}">
                    <span class="glyphicon glyphicon-ok"></span> Seen
                </button>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(document).ready(function (){
        $(".seen").click(function (){
            // $(this).parent().parent().remove();
            var id = $(this).data('id');
            var a = $(this);
            $.ajax({
                type: 'get',
                url: '/seen',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': id
                },
                success: function (data) {
                    if($('#type').val() == "all"){
                        a.remove();
                    }
                    else a.parent().parent().remove();
                    // $('.item' + $('.did').text()).remove();
                }
            });
        });
    });
</script>
<script src="{{ asset('js/app1.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>