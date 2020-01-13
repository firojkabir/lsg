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
                
                <div class="profile span9">
                    <div class="row content">
                        <div class="page-title">
                            <h2>Profile
                                <a class="btn btn-info btn-xs pull-right" href="/edit_profile">Edit Profile</a>
                            </h2>
                        </div>
                        <hr>
                        <div class="background-white p20 mb10">
                            <h4 class="page-title">Contact Information</h4>
                            <hr class="hr_exception">

                            <form class="contact-form">
                                <div class="span4">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>Firstname</label>
                                            <p style="color: red;">
                                                <label>{{ Auth::guard('client')->user()->firstname }}</label>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <p style="color: red;">
                                                <label>{{ Auth::guard('client')->user()->email }}</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="span5">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>Lastname</label>
                                            <p style="color: red;">
                                                <label>{{ Auth::guard('client')->user()->lastname }}</label>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>Phone</label>
                                            <p style="color: red;">
                                                <label>{{ Auth::guard('client')->user()->phone }}</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr class="hr_exception">
                                <h4 class="page-title">Address</h4>
                                <hr class="hr_exception">

                                <div class="span4">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>Street</label>
                                            <p>
                                                <label>{{ Auth::guard('client')->user()->street }}</label>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>City</label>
                                            <p>
                                                <label>{{ Auth::guard('client')->user()->city }}</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="span5">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>ZIP</label>
                                            <p>
                                                <label>{{ Auth::guard('client')->user()->zip }}</label>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label>Country</label>
                                            <p>
                                                <label>{{ Auth::guard('client')->user()->country }}</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection