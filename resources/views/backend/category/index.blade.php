@section('title', '分类')

@extends('backend.common.layouts')

@section('content')
    @section('style')
        @parent
        <!-- 弹出层 -->
        <!-- 这里添加新追的js或者css文件代码 -->

        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{ asset('Nifty/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Nifty/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
        <script src="{{ asset('Nifty/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

        <!--Bootbox Modals [ OPTIONAL ]-->
        <script src="{{ asset('Nifty/plugins/bootbox/bootbox.js') }}"></script>
    @endsection

    <div class="panel">
        @include('backend.alert.success')
        @include('backend.alert.warning')

        @include('backend.category.create-form-inc')
        @include('backend.category.edit-form-inc')

        <!--===================================================-->
        <div class="panel-body" >
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                <tr>
                    <th data-sort-ignore="true" class="min-width">序号</th>
                    <th>名字</th>
                    <th data-hide="phone, tablet">操作</th>
                </tr>
                </thead>
                <tbody>
                @if ($category)
                    <?php $line = 1  ?>
                    @foreach($category as $k=>$v)
                    <tr>
                        <td>{{ $line }}</td>
                        <td>{{ $v['name'] }}</td>
                        <td><button  class="btn btn-primary" data-toggle="modal" data-target="#editModal" onclick="edit({{ $v['id'] }})">
                                <i class="ion-edit"></i>&nbsp; 编辑</button>
                            <button class="btn btn-warning"  onclick="del({{ $v['id'] }})"><i class="ion-trash-a"></i>&nbsp; 删除</button>
                        </td>
                    </tr>
                    <?php $line++ ?>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!--===================================================-->
        <!-- End Foo Table - Add & Remove Rows -->

        <!--===================================================-->
        <!-- script star -->
        <script>
            function edit(id)
            {
                var url =  "{{ url('backend/category') }}/"+id+"/edit";
//                alert(url);
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {'id':id},
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 1) {
                            var val = data.data.name;
                            $('#cname-edit').attr("value", val);// 填充内容
                            $('#edit-id').attr("value", data.data.id);// 填充内容
                        }else{
                            alert('系统错误');
                            return false;
                        }
                    }
                });
            }



            function del(id)
            {
                bootbox.confirm("确认此项操作吗", function(result) {
                    if (result) {
                        $.niftyNoty({
                            type: 'success',
                            icon : 'pli-like-2 icon-2x',
                            message : '操作成功',
                            container : 'floating',
                            timer : 5000
                        });
                        var url =  "{{ url('backend/category') }}/"+id;
                        $.post(url, {'_method': "DELETE", '_token': '{{ csrf_token() }}'}, function (data) {
                            var msg;
                            if (data.status == 0) {
                                window.location.href = window.location.href;
                            } else {
                                msg = data.msg  ? data.msg : '删除失败';
                                layer.msg(msg, {time: 5000, icon: 5});
                            }
                        });

                    }else{
                        $.niftyNoty({
                            type: 'danger',
                            icon : 'pli-cross icon-2x',
                            message : '操作失败',
                            container : 'floating',
                            timer : 5000
                        });
                    };

                });
            }


        </script>


    </div>
@stop