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
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					{{-- <div class="feature_item">
    					<img src="{{ asset('static/website/themes/images/user.png') }}" alt="">
    					<h4>Nayeem</h4>
    					<p>Team Manager/Frontend Developer</p>
    				</div> --}}
    				<div class="card" style="width: 18rem; background-color: grey; padding: 15px;">
    				  <img class="card-img-top" src="{{ asset('static/website/themes/images/user.png') }}" alt="Card image cap">
    				  <div class="card-body">
    				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				  </div>
    				</div>
				</div>
				<div class="span4">
					<div class="card" style="width: 18rem; background-color: grey; padding: 15px;">
    				  <img class="card-img-top" src="{{ asset('static/website/themes/images/user.png') }}" alt="Card image cap">
    				  <div class="card-body">
    				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				  </div>
    				</div>
				</div>
				<div class="span4">
					<div class="card" style="width: 18rem; background-color: grey; padding: 15px;">
    				  <img class="card-img-top" src="{{ asset('static/website/themes/images/user.png') }}" alt="Card image cap">
    				  <div class="card-body">
    				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				  </div>
    				</div>
				</div>
			</div>
		</div>
	</div>
@endsection