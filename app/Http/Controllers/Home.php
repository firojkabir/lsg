<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Mail;
Use Auth;

class Home extends Controller
{


	public function index()
	{
		$data['latest'] = DB::table('products')->where('products.status', '1')->orderBy('created_at', 'DESC')->limit(4)->get();
		$data['top'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where('products.status', '1')
		->get();
		return view('frontend.home', $data);
	}

	public function product_details($id){
		$data['result'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where('products.id', $id)
		->where('products.status', '1')
		->first();

		if ($data['result']) {
			return view('frontend.product-details', $data);
		}else{
			return redirect()->back();
		}
	}

	public function profile(){		
		return view('frontend.profile');
	}

	public function category_search($id){
		if ($id == 'all' || $id =='') {
			$data['results'] = DB::table('products')
			->join('category', 'products.category_id', '=', 'category.id')
			->select('products.*', 'category.name')
			->where('products.status', '1')
			->get();

			$data['search'] = "Search results for all category.";
		}else{
			$data['results'] = DB::table('products')
			->join('category', 'products.category_id', '=', 'category.id')
			->select('products.*', 'category.name')
			->where('products.status', '1')
			->where('products.category_id', $id)
			->get();
			
			if (count($data['results'])) {
				$category = $data['results'][0];
				$data['search'] = "Results found for '".$category->name."'";
			}else{
				$data['search'] = "No results found.";
			}

		}

		return view('frontend.products', $data);
	}

	public function search(Request $request){
		$text = $request->input('text');

		$data['results'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where( 'products.status', '=', '1' )
		->where( function ( $query) use ($text)
		{
			$query->where('title', 'Like', '%'.$text.'%')
			->orWhere('description', 'Like', '%'.$text.'%')
			->orWhere('category.name', 'Like', '%'.$text.'%');
		})
		->get();
		
		if($text==''){
			$data['search'] = "Search results";
		}elseif (count($data['results'])) {
			$data['search'] = "Results found for '".$text."'";
		}else{
			$data['search'] = "No result found for '".$text."'";
		}
		
		return view('frontend.products', $data);
	}

	public function register(){
		if (Auth::guard('client')->check()) {
			return redirect('/');
		}else{
			return view('frontend.register');
		}
	}

	public function my_order(){
		$id = Auth::guard('client')->user()->id;
		$data['results'] = DB::table('orders')->where('client_id', $id)->orderBy('created_at', 'DESC')->get(); 
		return view('frontend.include.profile.my_order', $data);
	}

}
