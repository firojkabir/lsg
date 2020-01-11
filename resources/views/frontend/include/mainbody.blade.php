<div class="span9">		
	<div class="well well-small">
		<h4>Latest Products</h4>
		<div class="row-fluid">
			<div id="featured" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<ul class="thumbnails">
							@foreach($latest as $l)
							<li class="span3">
								<div class="thumbnail">
									<i class="tag"></i>
									<a href="/product-details/{{ $l->id }}"><img src="{{ asset($l->path.$l->thumb) }}" alt=""></a>
									<div class="caption">
										<h5>{{ $l->title }}</h5>
										<h4><a class="btn" href="/product-details/{{ $l->id }}">VIEW</a> <span class="pull-right">&euro;{{ $l->price }}</span></h4>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
				<a class="right carousel-control" href="#featured" data-slide="next">›</a>
			</div>
		</div>
	</div>
	<h4>Top Products </h4>
	<ul class="thumbnails">
		@foreach($top as $t)
		<li class="span3">
			<div class="thumbnail">
				<a  href="/product-details/{{ $t->id }}"><img src="{{ asset($t->path.$t->thumb) }}" alt=""/></a>
				<div class="caption">
					<h5>{{ $t->title }}</h5>
					<p>{{ $t->name }}</p>
					<h4 style="text-align:center">
						<a class="btn" href="/product-details/{{ $t->id }}"> <i class="icon-zoom-in"></i></a> 
						<a class="btn" href="/cart-summery">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;{{ $t->price }}</a>
					</h4>
				</div>
			</div>
		</li>
		@endforeach
	</ul>
</div>