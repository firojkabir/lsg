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
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active"> SHOPPING CART</li>
					</ul>
					<h3>  SHOPPING CART<a href="/products" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
					<hr class="soft"/>
					@php
						$items = Cart::content();
					@endphp

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Action</th>
								<th>Description</th>
								<th>Quantity/Update</th>
								<th>Price</th>{{-- 
								<th>Discount</th>
								<th>Tax</th> --}}
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach($items as $row)
							<tr>
								<td><a href="#" class="cart-remove" id="{{ $row->rowId }}">Remove</a></td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->qty }}</td>
								<td>&euro;{{ $row->price }}</td>
								<td>&euro;{{ $row->price*$row->qty }}</td>
							</tr>
							@endforeach
							<tr style="empty-cells: hide;">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>&euro;{{ Cart::subtotal() }}</td>
							</tr>
						</tbody>
					</table>
					<button type="btn" class="btn btn-success pull-right">Confirm order</button>
					
					
					{{-- <table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<form class="form-horizontal">
										<div class="control-group">
											<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
											<div class="controls">
												<input type="text" class="input-medium" placeholder="CODE">
												<button type="submit" class="btn"> ADD </button>
											</div>
										</div>
									</form>
								</td>
							</tr>
							
						</tbody>
					</table>
					
					<table class="table table-bordered">
						<tr><th>ESTIMATE YOUR SHIPPING </th></tr>
						<tr>
							<td>
								<form class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="inputCountry">Country </label>
										<div class="controls">
											<input type="text" id="inputCountry" placeholder="Country">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
										<div class="controls">
											<input type="text" id="inputPost" placeholder="Postcode">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn">ESTIMATE </button>
										</div>
									</div>
								</form>
							</td>
						</tr>
					</table>
					<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
					<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a> --}}
					
				</div>



			</div>
		</div>
	</div>
@endsection