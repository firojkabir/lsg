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
						<li class="active">Add Product</li>
					</ul>
					<h3 style="text-align: center;"> Add Product</h3>	
					<hr>
					<div class="well">
						<div class="row">
							<form class="add_product" method="post" enctype="multipart/form-data">
								<div class="span1"></div>
								<div class="span5">
									<div class="control-group">
										<div class="controls">
											<label for="product_title"><b>Product title<span style="color: red;">*</span></b></label>
											<input type="text" id="product_title" placeholder="" required="">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<label for="product_price"><b>Product price<span style="color: red;">*</span></b></label>
											<input type="number" id="product_price" placeholder="" required="">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<label for="product_size"><b>Product size</b></label>
											<select name="product_size" id="product_size" style="width: 85%;">
												<option value="0">=== Add product size ===</option>
												<option value="1">S</option>
												<option value="2">M</option>
												<option value="3">L</option>
												<option value="4">XL</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<label for="product_image"><b>Product image<span style="color: red;">*</span></b></label>
											<input type="file" name="fileToUpload" id="fileToUpload" required="">
										</div>
									</div>
									<br>
								</div>
								<div class="span5">
									<div class="control-group">
										<div class="controls"><b>
											<label for="product_category"><b>Product category<span style="color: red;">*</span></b></label>
											<select name="product_category" id="product_category"  style="width: 80%;" required="">
												<option value="0">=== Add product category ===</option>
												<option value="1">Computer, Tablet & Laptop</option>
												<option value="2">Mobile & Gadgets</option>
												<option value="3">Women's Clothing & Access.</option>
												<option value="4">Men's Clothing & Access.</option>
												<option value="5">Kids Clothing & Access.</option>
												<option value="6">Food & Beverages</option>
												<option value="7">Health & Beauty</option>
												<option value="8">Sports & Leisure</option>
												<option value="9">Books & Entertainments</option>
											</select>
										</div>
										<br>
										<div class="control-group">
											<div class="controls">
												<label for="product_description"><b>Product description<span style="color: red;">*</span></b></label>
												<textarea name="message" placeholder="" required="" style="min-height: 115px; width: 60%;"></textarea>
											</div>
											<br>
										</div>
									</div>
								</div>
							</form>
							<br><br>
							<button type="submit" class="btn btn-primary pull-right upload-btn">Upload product</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection