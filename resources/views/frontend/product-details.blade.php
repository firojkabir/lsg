@extends('layouts.frontend_base')

@section('content')
<div id="divImg">
	<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
</div>

<!-- ****** Body part start ****** -->
<div id="mainBody">
	<div class="container">
		<div class="row">

			<!-- ****** Sidebar start ****** -->
			@include('frontend.include.sidebar')
			<!-- ******* Sidebar end ******* -->

			<div class="span9">
				<ul class="breadcrumb">
					<li><a href="/">Home</a> <span class="divider">/</span></li>
					<li><a href="/products">Products</a> <span class="divider">/</span></li>
					<li class="active">product Details</li>
				</ul>
				<div class="row">
					<div id="gallery" class="span3">
						<a href="{{ asset($result->path.$result->image) }}">
							<img src="{{ asset($result->path.$result->image) }}" style="width:100%"/>
						</a>
						<div id="differentview" class="moreOptopm carousel slide">
							<div class="carousel-inner">
								<div class="item active">
									@if($result->image)
									<a href="{{ asset($result->path.$result->image) }}"> 
										<img style="width:29%" src="{{ asset($result->path.$result->image) }}" alt=""/>
									</a>
									@endif
									@if($result->image1)
									<a href="{{ asset($result->path.$result->image1) }}"> 
										<img style="width:29%" src="{{ asset($result->path.$result->image1) }}" alt=""/>
									</a>
									@endif

									@if($result->image2)
									<a href="{{ asset($result->path.$result->image2) }}" > 
										<img style="width:29%" src="{{ asset($result->path.$result->image2) }}" alt=""/>
									</a>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<h3>{{ $result->title }}</h3>
						<small><b>Category: </b>{{ $result->name }}</small>
						<hr class="soft"/>
						<form class="form-horizontal qtyFrm">
							<div class="control-group">
								<label class="control-label"><b>Price: </b><span>&euro;{{ $result->price }}</span></label>
								<div class="controls">
									<button type="submit" class="btn btn-large btn-primary pull-right add_cart"><a id="{{ $result->id }}" class="add-to-cart" href="#" style="color: white;">Add to cart </a><i class=" icon-shopping-cart"></i></button>
								</div>
							</div>
						</form>
						<hr class="soft clr"/>
						<label class="control-label"><b>Description </b></label>
						<p>{{ $result->description }}</p>
					</div>
					<hr class="soft clr"/>

					<button class="btn btn-large btn-success pull-right seller_contact" href="#contact_seller" role="button" data-toggle="modal"><span>Contact Seller</span></button>
					<div id="contact_seller" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="contact_seller" aria-hidden="false">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 style="text-align: center;">Seller contact information</h3>
						</div>
						<div class="modal-body">
							<form class="form-horizontal loginFrm" method="post" action="/login">
								@csrf
								<div class="control-group">								
									<label for="name">Seller Name: </label>
								</div>
								<div class="control-group">
									<label for="phone">Phone number: </label>
								</div>
								<div class="control-group">
									<label for="email">Email: </label>
								</div>
								<div class="control-group">
									<label for="address">Address: </label>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection