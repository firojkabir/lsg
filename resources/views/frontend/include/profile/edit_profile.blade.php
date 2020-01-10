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
                            </div><!-- /.user-photo -->
                        </div><!-- /.widget -->
                        <br>
                        <div class="widget">
                            @include('frontend.include.profile.pro_sidebar')
                        </div><!-- /.widget -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-* -->





            </div><!-- /.col-* -->
        </div>
    </section>





@endsection