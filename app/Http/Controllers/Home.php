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
		$data['latest'] = DB::table('products')->get();
		$data['top'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->get();
		return view('frontend.home', $data);
	}

	public function product_details($id){
		$data['result'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where('products.id', $id)
		->first();
		return view('frontend.product-details', $data);
	}

}
