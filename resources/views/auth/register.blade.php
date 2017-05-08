<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('Nifty/css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('Nifty/css/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('Nifty/css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">



    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('Nifty/css/demo/nifty-demo.min.css') }}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{ asset('Nifty/plugins/magic-check/css/magic-check.min.css') }}" rel="stylesheet">






    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('Nifty/plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('Nifty/plugins/pace/pace.min.js') }}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('Nifty/js/jquery-2.2.4.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('Nifty/js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('Nifty/js/nifty.min.js') }}"></script>






    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{{ asset('Nifty/js/demo/bg-images.js') }}"></script>




</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>


		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h3 class="h4 mar-no">注册</h3>
		                <p class="text-muted">Sign In to your account</p>
		            </div>
					<form  role="form" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group">
							<input id="name" type="text" placeholder="用户名" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
							@endif
						</div>


		                <div class="form-group">
							<input id="email" type="email" placeholder="邮箱" class="form-control" name="email" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>

						<div class="form-group">
							<input id="password" type="password" class="form-control" name="password" required placeholder="密码">
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>

						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-control" placeholder="重复密码">
						</div>
						@if ($errors->has('password'))
							<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
						@endif

		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox"  >
		                    <label for="demo-form-checkbox">阅读条款</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">注册</button>
		            </form>
		        </div>

		        <div class="pad-all">
		            <a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
		            <a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>

		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		                <div class="media-body text-left">
		                    Login with
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--===================================================-->


		<!-- DEMO PURPOSE ONLY -->
		<!--===================================================-->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="{{ asset('Nifty/img/bg-img/thumbs/bg-trns.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/"img/bg-img/thumbs/bg-img-1.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-2.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-3.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-4.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-5.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-6.jpg') }}" alt="Background Image">
		        <img class="demo-chg-bg" src="{{ asset('Nifty/img/bg-img/thumbs/bg-img-7.jpg') }}" alt="Background Image">
		    </div>
		</div>
		<!--===================================================-->



	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


		</body>
</html>
