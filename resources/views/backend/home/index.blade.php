@section('title', '控制面板')

@extends('backend.common.layouts')

@section('content')
    @section('style')
    @parent
    <!-- 这里添加新追的js或者css文件代码 -->
<!--Morris.js [ OPTIONAL ]-->
<link href="{{ asset('Nifty/plugins/morris-js/morris.min.css') }}" rel="stylesheet">
<!--Morris.js [ OPTIONAL ]-->
<script src="{{ asset('Nifty/plugins/morris-js/morris.min.js') }}"></script>
<script src="{{ asset('Nifty/plugins/morris-js/raphael-js/raphael.min.js') }}"></script>


<!--Sparkline [ OPTIONAL ]-->
<script src="{{ asset('Nifty/plugins/sparkline/jquery.sparkline.min.js') }}"></script>


<!--Specify page [ SAMPLE ]-->
<script src="{{ asset('Nifty/js/demo/dashboard.js') }}"></script>


@endsection

{{--内容区域--}}




            <!--Network Line Chart-->
<!--===================================================-->
<div id="demo-panel-network" class="panel">
    <div class="panel-heading">
        <div class="panel-control">
            <button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="demo-pli-repeat-2 icon-lg"></i></button>
            <div class="btn-group">
                <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="demo-pli-gear icon-lg"></i></button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        </div>
        <h3 class="panel-title">网络状态</h3>
    </div>

    <!--Morris line chart placeholder-->
    <div id="morris-chart-network" class="morris-full-content"></div>

    <!--Chart information-->
    <div class="panel-body">
        <div class="row pad-top">
            <div class="col-lg-8">
                <div class="media">
                    <div class="media-left">
                        <div class="media">
                            <p class="text-semibold text-main">温度</p>
                            <div class="media-left pad-no">
					                                        <span class="text-2x text-semibold text-nowrap text-main">
					                                            <i class="demo-pli-temperature"></i> 43.7
					                                        </span>
                            </div>
                            <div class="media-body">
                                <p class="mar-no">°C</p>
                            </div>
                        </div>
                    </div>
                    <div class="media-body pad-lft">
                        <div class="pad-btm">
                            <p class="text-semibold text-main mar-no">今天提示</p>
                            <small>一个美好的宁静已经占有了我的整个灵魂，像我喜欢的全部的心灵的春天的这些甜蜜的早晨。</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <p class="text-semibold text-main">带宽使用</p>
                <ul class="list-unstyled">
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <span class="text-2x text-semibold text-main">75.9</span>
                            </div>
                            <div class="media-body">
                                <p class="mar-no">Mbps</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="clearfix">
                            <p class="pull-left mar-no">Outcome</p>
                            <p class="pull-right mar-no">75%</p>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" style="width: 75%;">
                                <span class="sr-only">75%</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>
<!--===================================================-->
<!--End network line chart-->

<div class="col-sm-6 col-lg-6">

    <!--Sparkline Area Chart-->
    <div class="panel panel-success panel-colorful">
        <div class="pad-all">
            <p class="text-lg text-semibold"><i class="demo-pli-data-storage icon-fw"></i> 硬盘使用</p>
            <p class="mar-no">
                <span class="pull-right text-bold">132Gb</span>
                已用空间
            </p>
            <p class="mar-no">
                <span class="pull-right text-bold">1,45Gb</span>
                剩余空间
            </p>
        </div>
        <div class="pad-all text-center">
            <!--Placeholder-->
            <div id="demo-sparkline-area"></div>
        </div>
    </div>
</div>


{{--内容区域--}}
@endsection
