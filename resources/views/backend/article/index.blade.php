@section('title', '文章')

@extends('backend.common.layouts')

@section('content')
        @section('style')
        @parent
        <!-- 这里添加新追的js或者css文件代码 -->
        <style>
            #sel{padding: 5px 12px;}
        </style>

        @endsection
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">文章</h3>
        </div>
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 table-toolbar-left">
                        <a href="{{ url('backend/article/create') }}"><button id="demo-btn-addrow" class="btn btn-purple">
                                <i class="ion-compose"></i>&nbsp; 添加
                            </button></a>

                    </div>
                    <form action="" method="get">
                    <div class="col-sm-6 table-toolbar-right">
                        <div class="form-group">
                            <input  type="text" name="title" placeholder="标题" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <select name="cate_id" id="sel" class="form-control">
                                <option value="">请选择分类</option>
                                @if($category)
                                    @foreach($category as $k=>$v)
                                    <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default"><i class="ion-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-left">序号</th>
                        <th>作者</th>
                        <th>标题</th>
                        <th>阅读数</th>
                        <th>评论数</th>
                        <th>分类</th>
                        <th>状态</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($article)
                        <?php $line = 1  ?>
                        @foreach($article as $k=>$v)
                            <tr>
                                <td><a class="btn-link" href="#">{{ $line }}</a></td>
                                <td>{{ $v['user_id'] }}</td>
                                <td><span class="text-muted">{{ $v['title'] }}</span></td>
                                <td>{{ $v['read_count'] }}</td>
                                <td>{{ $v['comment_count'] }}</td>
                                <td>
                                    {{ $v['cate_id'] }}
                                </td>
                                <td>{{ $v['status'] }}  </td>
                                <td><i class="demo-pli-clock"></i> {{ $v['created_at'] }}</td>
                                <td >
                                    <button  class="btn btn-primary"><i class="ion-edit"></i>&nbsp; 编辑</button>
                                    <button class="btn btn-warning"><i class="ion-trash-a"></i>&nbsp; 删除</button>
                                </td>
                            </tr>

                            <?php $line++ ?>
                        @endforeach
                    @endif


                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 table-toolbar-right">
                {!! $article->links() !!}
            </div>
        </div>
    </div>

<!--===================================================-->
<!--End Data Table-->


@stop