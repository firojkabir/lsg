@extends('layouts.frontend_base')

@section('content')
	<div id="divImg">
		<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
	</div>
    <br>

    <section class="htc__product__grid bg__white ptb--50">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="user-photo">
                                <a href="#">
                                    <img src="{{ asset('static/website/themes/images/user.png') }}" alt="User Photo" class="image-responsive" style="height: 200px; width: 200px;">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="widget">
                            @include('frontend.include.profile.pro_sidebar')
                        </div>
                    </div>
                </div>

                <div class="my_products span9">
                    <div class="content">
                        <div class="page-title">
                            <h3>My Products</h3>
                        </div>
                        <hr>
                        
                        <div class="table-content table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="si">SL</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Status</th>
                                        <th class="product-action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($results as $result)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $result->title }}</td>
                                        <td>{{ $result->price }}</td>
                                        <td>{{ $result->status }}</td>
                                        <td><a href="/edit_product">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a class="btn pull-right add_product" href="/add_product"><b>Add New Product</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection