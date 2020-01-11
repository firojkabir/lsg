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
					<li class="active">Edit Product</li>
				</ul>
				<h3 style="text-align: center;"> Edit Product</h3>	
				<hr>
				<div class="well">
					<div class="row">
						@if ($errors->any())
						<div class="col-sm-12 text-center">
							<br>
							@foreach ($errors->all() as $error)
							<div style="color: red;">{{ $error }}</div>
							@endforeach
							<br>
						</div>
						@endif
						<form class="add_product" method="post" enctype="multipart/form-data" action="/edit_product/{{ $result->id }}">
							@csrf
							<div class="span1"></div>
							<div class="span5">
								<div class="control-group">
									<div class="controls">
										<label for="title"><b>Product title<span style="color: red;">*</span></b></label>
										<input type="text" id="title" placeholder="" required="" name="title" value="{{ $result->title }}">
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<label for="price"><b>Product price<span style="color: red;">*</span></b></label>
										<input type="number" step="any" min="0.01" id="price" placeholder="" required="" name="price" value="{{ $result->price }}">
									</div>
								</div>
									{{-- <div class="control-group">
										<div class="controls">
											<label for="product_size"><b>Product size</b></label>
											<select name="size" id="product_size" style="width: 85%;">
												<option value="0">=== Add product size ===</option>
												<option value="1">S</option>
												<option value="2">M</option>
												<option value="3">L</option>
												<option value="4">XL</option>
											</select>
										</div>
									</div> --}}
									<div class="control-group">
										<div class="controls">
											<label for="image"><b>Product image 1</b></label>
											<input type="file" id="image" name="image">
											<input type="hidden" name="old_image" value="{{ $result->image }}">
										</div>
									</div>
									<br>

									<div class="control-group">
										<div class="controls">
											<label for="image"><b>Product image 2</b></label>
											<input type="file" id="image1" name="image1">
											<input type="hidden" name="old_image1" value="{{ $result->image1 }}">
										</div>
									</div>
									<br>

									<div class="control-group">
										<div class="controls">
											<label for="image"><b>Product image 3</b></label>
											<input type="file" id="image2" name="image2">
											<input type="hidden" name="old_image2" value="{{ $result->image2 }}">
										</div>
									</div>
									<br>

								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls"><b>
											<label for="product_category"><b>Product category<span style="color: red;">*</span></b></label>
											<select name="category" id="product_category"  style="width: 80%;" required>
												<option value="">=== Add product category ===</option>
												@foreach($categories as $c)
												<option {{ $result->category_id == $c->id ? 'selected':'' }} value="{{ $c->id }}">{{ $c->name }}</option>
												@endforeach
											</select>
										</div>
										<br>
										<div class="control-group">
											<div class="controls">
												<label for="product_description"><b>Product description<span style="color: red;">*</span></b></label>
												<textarea name="description" placeholder="" required="" style="min-height: 115px; width: 60%;">{{ $result->description }}</textarea>
											</div>
											<br>
										</div>
									</div>
								</div>
								<br><br>
								<button type="submit" class="btn btn-primary pull-right upload-btn">Upload product</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection