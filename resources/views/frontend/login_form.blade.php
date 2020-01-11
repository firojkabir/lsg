@extends('layouts.frontend_base')

@section('content')
	<div id="divImg">
		<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
	</div>
	
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<li><a href="/">Home</a> <span class="divider">/</span></li>
						<li class="active">Login</li>
					</ul>
					<h3 style="text-align: center;"> Login</h3>	
					<div class="well">
						<div class="row">
							<div class="span4">
								
							</div>
							<div class="span6">
								<form class="form-horizontal loginFrm" method="post">
									@csrf
									<div class="control-group">								
										<input type="text" id="inputEmail" placeholder="Username or Email" name="email">
									</div>
									<br>
									<div class="control-group">
										<input type="password" id="inputPassword" placeholder="Password" name="password">
									</div>
									<br>
									<div class="control-group">
										<label class="checkbox">
											<input type="checkbox"> Remember me
										</label>
										<p style="font-size: 15px;">New here? Then <b><a href="/register" style="color: darkslateblue;">Register</a> </b>first.</p>
									</div>
									<button type="submit" class="btn btn-success">Login</button>
								</form>
							</div>
							{{-- <form class="login">
								<div class="span4">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputFname1" placeholder="First Name*" required="">
										</div>
									</div>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputLnam" placeholder="Last Name*" required="">
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="control-group">
										<div class="controls">
											<input type="email" id="inputEmail" placeholder="Email*" required="">
										</div>
									</div>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<input type="password" id="inputPassword" placeholder="Password*" required="">
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="control-group">
										<div class="controls">
											<input type="number" id="inputPhone" placeholder="Phone Number*" required="">
										</div>
									</div>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputHouse" placeholder="House*" required="">
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputStreet" placeholder="Street*" required="">
										</div>
									</div>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputCity" placeholder="City*" required="">
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="control-group">
										<div class="controls">
											<input type="number" id="inputZip" placeholder="Zip*" required="">
										</div>
									</div>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<input type="text" id="inputCountry" placeholder="Country*" required="">
										</div>
									</div>
								</div>
							</form>
							<button type="submit" class="btn btn-success pull-right rg-btn">Sign Up</button> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection