@extends('layouts.admin')

@section('content')
<div class="table-responsive">

    <table CELLSPACING=0 CELLPADDING=0 BORDER=0 align="center" class="table table-striped">
        @if(Session::has('msg'))
        <tr>
            <td align=center><span style="color: blue">{!! ucwords(session('msg')) !!}</span></td>
        </tr>
        @endif

        <tr>
            <td align=center style="color:#1fa337; " height="100"></td>
        </tr>
        <tr>
            <td align=center class="text-custom">
                <h2>WELCOME </h2>
            </td>
        </tr>
        <tr>
            <td align=center class="text-custom">
                <h2> To </h2>
            </td>
        </tr>
        <tr>
            <td align=center>
                {{-- <img src="{{ asset('admin_assets/admin_images/logo.png') }}"> --}}
                <a class="brand" href="/" style="color: #89c4f4;"><b><p style="font-size: 30px;">Let<span style="color: red; font-size: 35px;">Stuff</span>Go</p></b></a>
            </td>
        </tr>
        <tr>
            <td align=center style="color:#1fa337" height="100"></td>
        </tr>

    </table>
</div>
@endsection