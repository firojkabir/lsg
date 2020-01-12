<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Mail;

class Home extends Controller
{


	public function index()
	{
		$data['latest'] = DB::table('products')->orderBy('created_at', 'DESC')->limit(4)->get();
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

	public function profile(){		
		return view('frontend.profile');
	}

	public function category_search($id){
		if ($id == 'all' || $id =='') {
			$data['results'] = DB::table('products')
			->join('category', 'products.category_id', '=', 'category.id')
			->select('products.*', 'category.name')
			->get();
		
			$data['search'] = "Search results for all category.";
		}else{
			$data['results'] = DB::table('products')
			->join('category', 'products.category_id', '=', 'category.id')
			->select('products.*', 'category.name')
			->where('products.category_id', $id)
			->get();
			
			$category = $data['results'][0];
			$data['search'] = "Search results for category '".$category->name."'";

		}

		return view('frontend.products', $data);
	}

	public function search(Request $request){
		$text = $request->input('text');

		$data['results'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where('title', 'Like', '%'.$text.'%')
		->orWhere('description', 'Like', '%'.$text.'%')
		->orWhere('category.name', 'Like', '%'.$text.'%')
		->get();
		
		if($text==''){
			$data['search'] = "Search results";
		}elseif (count($data['results'])) {
			$data['search'] = "Search results for '".$text."'";
		}else{
			$data['search'] = "No result found for '".$text."'";
		}
		
		return view('frontend.products', $data);
	}



}
