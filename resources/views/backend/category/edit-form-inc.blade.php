
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="myModalLabel">编辑分类</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal m-t" id="commentForm" method="post" action="{{ url('backend/category/update') }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <input type="hidden" name="id" id="edit-id">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">分类名称：</label>
                        <div class="col-sm-7">
                            <input id="cname-edit" name="name" minlength="2" type="text" class="form-control" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">上级分类：</label>
                        <div class="col-sm-7">
                            <select class="selectpicker" name="parent_id">
                                <option value="0">顶级分类</option>
                                @foreach($category as $k=>$v)
                                    <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                        <!-- <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">提交</button>
                        </div>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="left:10px;" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存操作</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>




<script>


    //以下为官方示例
    $().ready(function () {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        var icon = "<i class='fa fa-times-circle'></i> ";
        $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                firstname: icon + "请输入你的姓",
                lastname: icon + "请输入您的名字",
                username: {
                    required: icon + "请输入您的用户名",
                    minlength: icon + "用户名必须两个字符以上"
                },
                password: {
                    required: icon + "请输入您的密码",
                    minlength: icon + "密码必须5个字符以上"
                },
                confirm_password: {
                    required: icon + "请再次输入密码",
                    minlength: icon + "密码必须5个字符以上",
                    equalTo: icon + "两次输入的密码不一致"
                },
                email: icon + "请输入您的E-mail",
                agree: {
                    required: icon + "必须同意协议后才能注册",
                    element: '#agree-error'
                }
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function () {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });
    });

</script>