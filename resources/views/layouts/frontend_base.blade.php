<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LetStuffGo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('static/website/themes/images/ico/favicon1.ico') }}">
	<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">-->

	<script src="{{ asset('static/website/themes/js/less.js" type="text/javascript') }}"></script> 	
	<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{ asset('static/website/themes/bootshop/bootstrap.min.css') }}" media="screen"/>
    <link href="{{ asset('static/website/themes/css/base.css') }}" rel="stylesheet" media="screen"/>
	<!-- Bootstrap style responsive -->	
	<link href="{{ asset('static/website/themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('static/website/themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->	
	<link href="{{ asset('static/website/themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fav and touch icons -->
    {{-- 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style> --}}

	<!-- Online Bootstrap Link -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Welcome to <strong> LetStuffGo</strong></div>
				<div class="span6">
					<div class="pull-right">
						<a href="product_summary.html"><span class="btn btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 0 ] Cart </span> </a> 
					</div>
				</div>
			</div>
			<!-- ****** Navbar ****** -->
			<div id="logoArea" class="navbar">
				<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-inner">
					<a class="brand" href="/"><img src="{{ asset('static/website/themes/images/logo.png') }}" alt="LetStuffGo"/></a>
					<form class="form-inline navbar-search" method="get" action="/products">
						<input id="srchFld" class="srchTxt" placeholder="search" type="text"/>
						<button type="submit" id="submitButton" class="btn btn-primary">Search</button>
					</form>
					<ul id="topMenu" class="nav pull-right">
						<li class=""><a href="/">Home</a></li>
						<li class=""><a href="/contact">Contact</a></li>
						<li class=""><a href="/profile">About us</a></li>
						<li class="">
							<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
							<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
									<h3 style="text-align: center;">Login</h3>
								</div>
								<div class="modal-body">
									<form class="form-horizontal loginFrm">
										<div class="control-group">								
											<input type="text" id="inputEmail" placeholder="Username or Email">
										</div>
										<br>
										<div class="control-group">
											<input type="password" id="inputPassword" placeholder="Password">
										</div>
										<br>
										<div class="control-group">
											<label class="checkbox">
												<input type="checkbox"> Remember me
											</label>
											<p style="font-size: 15px;">New here? Then <b><a href="/register" style="color: darkslateblue;">Register</a> </b>first.</p>
										</div>
									</form>		
									<button type="submit" class="btn btn-success">Login</button>
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- ******* Header End ****** -->

	@yield('content')

	<!-- ****** Footer part start ****** -->
	<div  id="footerSection">
		<div class="container">
			<div class="row">
				<div class="span6 pull-left">
					<p class="">&copy; Copyright reserved by <b>GDSD-G6</b>, 2019</p>
				</div>
				<div id="socialMedia" class="span6 pull-right">
					{{-- <h5>SOCIAL MEDIA </h5> --}}<span>Follow us: </span>
					<a href="www.facebook.com"><i class="fa fa-facebook" style="font-size:30px; color:#4267B2;"></i></a>
					<a href="www.youtube.com"><i class="fa fa-youtube" style="font-size:30px; color:#FF0000;"></i></a>
				</div>
			</div>
			<br>
		</div>
		<!-- ****** Container End ****** -->
	</div>
	<!-- ****** Footer part end ****** -->

	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{ asset('static/website/themes/js/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('static/website/themes/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('static/website/themes/js/google-code-prettify/prettify.js') }}"></script>
	<script src="{{ asset('static/website/themes/js/bootshop.js') }}"></script>
    <script src="{{ asset('static/website/themes/js/jquery.lightbox-0.5.js') }}"></script>
</body>
</html>