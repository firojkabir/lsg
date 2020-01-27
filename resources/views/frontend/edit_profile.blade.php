@extends('layouts.frontend_base')

@section('content')
	<div id="divImg">
		<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
	</div>
    <br>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <section class="htc__product__grid bg__white ptb--50">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="user-photo">
                                    <div class="row">
                                        <div class="col-smx-2 imgUp">
                                            <div class="imagePreview"></div>
                                            <label class="btn btn-primary">
                                            Upload<input type="file" class="file" value="Upload Photo" style="width: 100%: 0px;overflow: hidden;" name="uploadedfile" id="image">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="widget">
                                    @include('frontend.include.profile.pro_sidebar')
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="span9">
                        <div class="content">
                            <div class="page-title">
                                <h2>Edit Profile</h2>
                            </div>
                            <hr>
                            <div class="background-white p20 mb10">
                                <h3 class="page-title">Contact Information</h3>
                                <hr>
                                <div class="row">
                                    <div class="form-group span4">
                                        <label>Firstname</label>
                                        <input type="text"  class="form-control" value="" name="firstname" required>
                                    </div>
                                    <div class="form-group span5">
                                        <label>Lastname</label>
                                        <input type="text"  class="form-control" value="" name="lastname" required>
                                    </div>
                                    <div class="form-group span4">
                                        <label>E-mail</label>
                                        <input type="text"  class="form-control" value="" name="email" required>
                                    </div>
                                    <div class="form-group span5">
                                        <label>Phone</label>
                                        <input type="text"  class="form-control" value="" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="background-white p20 mb10">
                                <h3 class="page-title">Address</h3>
                                <div class="row">
                                    <div class="form-group span4">
                                        <label>Street</label>
                                        <input type="text"  class="form-control" value="" name="state" required>
                                    </div>
                                    <div class="form-group span5">
                                        <label>City</label>
                                        <input type="text"  class="form-control" value="" name="city" required>
                                    </div>
                                    <div class="form-group span4">
                                        <label>ZIP</label>
                                        <input type="text"  class="form-control" value="" name="zip" required>
                                    </div>
                                    <div class="form-group span5">
                                        <label>Country</label>
                                        <input type="text"  class="form-control" value="" name="country" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

@endsection