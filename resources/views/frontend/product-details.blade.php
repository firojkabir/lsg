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
							<a href="{{ asset('static/website/themes/images/products/large/f1.jpg') }}" title="Fujifilm FinePix S2950 Digital Camera">
								<img src="{{ asset('static/website/themes/images/products/large/3.jpg') }}" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
							</a>
							<div id="differentview" class="moreOptopm carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<a href="{{ asset('static/website/themes/images/products/large/f1.jpg') }}"> 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f1.jpg') }}" alt=""/>
										</a>
										<a href="{{ asset('static/website/themes/images/products/large/f2.jpg') }}"> 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f2.jpg') }}" alt=""/>
										</a>
										<a href="{{ asset('static/website/themes/images/products/large/f3.jpg') }}" > 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f3.jpg') }}" alt=""/>
										</a>
									</div>
									<div class="item">
										<a href="{{ asset('static/website/themes/images/products/large/f3.jpg') }}" > 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f3.jpg') }}" alt=""/>
										</a>
										<a href="{{ asset('static/website/themes/images/products/large/f1.jpg') }}"> 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f1.jpg') }}" alt=""/>
										</a>
										<a href="{{ asset('static/website/themes/images/products/large/f2.jpg') }}"> 
											<img style="width:29%" src="{{ asset('static/website/themes/images/products/large/f2.jpg') }}" alt=""/>
										</a>
									</div>
								</div>
							</div>
							
							{{-- <div class="btn-toolbar">
								<div class="btn-group">
									<span class="btn"><i class="icon-envelope"></i></span>
									<span class="btn" ><i class="icon-print"></i></span>
									<span class="btn" ><i class="icon-zoom-in"></i></span>
									<span class="btn" ><i class="icon-star"></i></span>
									<span class="btn" ><i class=" icon-thumbs-up"></i></span>
									<span class="btn" ><i class="icon-thumbs-down"></i></span>
								</div>
							</div> --}}
						</div>
						<div class="span6">
							<h3>Fujifilm FinePix S2950 Digital Camera  </h3>
							<small>- (14MP, 18x Optical Zoom) 3-inch LCD</small>
							<hr class="soft"/>
							<form class="form-horizontal qtyFrm">
								<div class="control-group">
									<label class="control-label"><span>$222.00</span></label>
									<div class="controls">
										<input type="number" class="span1" placeholder="Qty."/>
										<button type="submit" class="btn btn-large btn-primary pull-right"><a href="/cart-summery">Add to cart </a><i class=" icon-shopping-cart"></i></button>
									</div>
								</div>
							</form>
							
							<hr class="soft"/>
							<h4>100 items in stock</h4>
							{{-- <form class="form-horizontal qtyFrm pull-right">
								<div class="control-group">
									<label class="control-label"><span>Color</span></label>
									<div class="controls">
										<select class="span2">
											<option>Black</option>
											<option>Red</option>
											<option>Blue</option>
											<option>Brown</option>
										</select>
									</div>
								</div>
							</form> --}}
							<hr class="soft clr"/>
							<p>
								14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution.
								Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm.
								Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).
								
							</p>
						</div>
						<hr class="soft clr"/>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection