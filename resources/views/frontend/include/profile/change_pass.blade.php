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

                <div class="span9">
                    <div class="row content">
                        <div class="page-title">
                            <h3>Change password</h3>
                        </div>
                        <hr>
                        <form class="change_password_form">
                            <div class="span5">
                                <div class="control-group">
                                    <div class="controls">
                                        <label><b>Email</b></label>
                                        <input type="email" value="" name="email" required>
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="controls">
                                        <label><b>Current password</b></label>
                                        <input type="password" class="form-control" value="" name="password" required>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <div class="controls">
                                        <label><b>New password</b></label>
                                        <input type="password" value="" name="n_password" required> 
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="controls">
                                        <label><b>Confirm password</b></label>
                                        <input type="password" class="form-control" value="" name="c_password" required> 
                                    </div>
                                </div>
                                <br>
                            </div>
                            <button class="btn btn-md pull-right" type="submit">Update</button>
                        </form>


                        {{-- <form action="" method="post">
                            <div class="change_pass_form">
                                <div class="row">
                                    <div class="form-group span6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="" name="email" required> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group span6">
                                        <label>Current password</label>
                                        <input type="password" class="form-control" value="" name="password" required> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group span6">
                                        <label>New password</label>
                                        <input type="password" class="form-control" value="" name="n_password" required> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group span6">
                                        <label>Confirm password</label>
                                        <input type="password" class="form-control" value="" name="c_password" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <button class="btn btn-primary btn-md" type="submit">Update</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection