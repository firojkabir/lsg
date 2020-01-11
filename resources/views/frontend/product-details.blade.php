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
									<a href="{{ asset($result->path.$result->image) }}"> 
										<img style="width:29%" src="{{ asset($result->path.$result->image) }}" alt=""/>
									</a>
									<a href="{{ asset($result->path.$result->image1) }}"> 
										<img style="width:29%" src="{{ asset($result->path.$result->image1) }}" alt=""/>
									</a>
									<a href="{{ asset($result->path.$result->image2) }}" > 
										<img style="width:29%" src="{{ asset($result->path.$result->image2) }}" alt=""/>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<h3>{{ $result->title }}</h3>
						<small>- {{ $result->name }}</small>
						<hr class="soft"/>
						<form class="form-horizontal qtyFrm">
							<div class="control-group">
								<label class="control-label"><span>&euro;{{ $result->price }}</span></label>
								<div class="controls">
									<input type="number" class="span1" placeholder="Qty."/>
									<button type="submit" class="btn btn-large btn-primary pull-right"><a href="/cart-summery">Add to cart </a><i class=" icon-shopping-cart"></i></button>
								</div>
							</div>
						</form>
						<hr class="soft clr"/>
						<p>{{ $result->description }}</p>
					</div>
					<hr class="soft clr"/>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection