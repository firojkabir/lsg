<?php
/**
 * @Author: Jobayer Mojumder
 * @Date:   2017-09-17 12:56:14
 * @Last Modified by:   jobayermojumder
 * @Last Modified time: 2018-05-31 12:36:32
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use DB;
use File;
use Image;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     * by-Optimus
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('admin.home');
        } else {
            redirect('logout');
        }
    }

}
