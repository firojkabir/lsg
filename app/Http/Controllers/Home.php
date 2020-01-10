<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;
use Mail;

class Home extends Controller
{


    public function index()
    {
        return view('website.index');
    }

}
