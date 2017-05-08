@section('title', '添加文章')

@extends('backend.common.layouts')

@section('content')
    @section('style')
    @parent
            <!-- 这里添加新追的js或者css文件代码 -->

        <style>
            #editor-container{
                max-width: 80%;
                min-width: 700px;
                padding: 0;
            }
            #editor-trigger{
                height: 300px;
            }
        </style>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{ asset('Nifty/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Nifty/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
        <script src="{{ asset('Nifty/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <link href="{{ asset('Nifty/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet">
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="{{ asset('Nifty/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

        <!--百度剪辑器-->
        <script type="text/javascript" charset="utf-8" src="{{ asset('Nifty/ueditor/ueditor.config.js') }}"></script>
        <script type="text/javascript" charset="utf-8" src="{{ asset('Nifty/ueditor/ueditor.all.min.js') }}"> </script>
        <script type="text/javascript" charset="utf-8" src="{{ asset('Nifty/ueditor/lang/zh-cn/zh-cn.js') }}"></script>
    @endsection

        <div class="panel">
            @include('backend.alert.success')

            <div class="panel-heading">
                <h3 class="panel-title">添加文章</h3>
            </div>

            <form class="panel-body form-horizontal form-padding" method="POST" action="{{ url('backend/article') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="col-md-1 control-label" for="title">标题</label>
                    <div class="col-md-6">
                        <input type="text" name="title" id="title" class="form-control" placeholder="标题">
                        {{--<small class="help-block">错误信息</small>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="keyword">关键字</label>
                    <div class="col-md-6">
                        <input type="text" name="keyword" id="keyword" class="form-control"
                               placeholder="使用英文逗号分隔，利于搜索引擎收录">
                        {{--<small class="help-block">错误信息</small>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="desc">描述</label>
                    <div class="col-md-6">
                        <textarea name="desc" class="form-control" cols="10" rows="2"></textarea>
                        {{--<small class="help-block">错误信息</small>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="editor-container">内容</label>
                    <div class="col-md-6">
                        <!-- 编辑器开始 -->
                        <script id="editor" name="contents" type="text/plain" style="width:1024px;height:500px;"></script>
                        <script>
                            var ue = UE.getEditor('editor');

                        </script>

                        <!-- 编辑器结束 -->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="demo-text-input">Text Input</label>
                    <div class="col-md-6">
                        <select class="selectpicker" name="cate_id">
                            @if ($category)
                                @foreach($category as $k=>$v)
                                        <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="demo-text-input">Text Input</label>
                    <div class="col-md-6">
                        <input type="text" name="tags" class="form-control" placeholder="多个标签使用回车键隔开" value="" data-role="tagsinput">
                    </div>
                </div>

                <div class="panel-footer text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-warning" type="reset" >重置</button>
                            <button class="btn btn-mint" type="submit">提交</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @stop