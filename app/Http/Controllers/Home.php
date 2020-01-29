<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Mail;
Use Auth;
use Image;

class Home extends Controller
{


	public function index()
	{
		$data['latest'] = DB::table('products')->where('products.status', '1')->orderBy('created_at', 'DESC')->limit(4)->get();
		$data['top'] = DB::table('products')
		->join('category', 'products.category_id', '=', 'category.id')
		->select('products.*', 'category.name')
		->where('products.status', '1')
		->limit(15)
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

	public function edit_profile(Request $request){	

		if ($request->isMethod('get')) {
			$id = Auth::guard('client')->user()->id;
			$data['result'] = DB::table('clients')->where('id', $id)->first();
			return view('frontend.edit_profile', $data);
		} elseif ($request->isMethod('post')) {
			
			$request->validate([
				'firstname' => 'required|string|max:255',
				'lastname' => 'required|string|max:255',
				// 'email' => 'required|string|email|max:255|unique:clients',
				// 'password' => 'required|string|min:6|confirmed',
				'phone' => 'required|string|max:255',
				'country' => 'required|string|max:255',
				'street' => 'required|string|max:255',
				'city' => 'required|string|max:255',
				'zip' => 'required|string|max:255',
			]);

			$id = Auth::guard('client')->user()->id;

			try {
				$postdata['firstname'] = $request->input('firstname');
				$postdata['lastname'] = $request->input('lastname');
				$postdata['phone'] = $request->input('phone');
				$postdata['country'] = $request->input('country');
				$postdata['street'] = $request->input('street');
				$postdata['city'] = $request->input('city');
				$postdata['zip'] = $request->input('zip');

				$postdata['path'] = 'assets/profile/';

				if (Input::hasFile('image')) {

					$image = $request->file('image');
					$imagename = time() . '_' . $image->getClientOriginalname();
					$thumb = 'thumb_' . $imagename;
					$path = 'assets/profile';
					$img = Image::make($image->getRealPath())->resize(150, 150);
					$img->save($path . '/' . $thumb);
					$image->move($path, $imagename);
					$postdata['image'] = $imagename;
					$postdata['thumb'] = $thumb;

					if ($request->input('old_image')) {
						$delete1 = $postdata['path'] . $request->input('old_image');
						$delete2 = $postdata['path'] . 'thumb_' . $request->input('old_image');
						if (File::exists($delete1)) {
							unlink($delete1);
						}
						if (File::exists($delete2)) {
							unlink($delete2);
						}
					}
				}

				$result = DB::table('clients')->where('id', $id)->update($postdata);
				$request->session()->flash('smsg', 'Profile Successfully updated!');
				return redirect('/profile');

			} catch (Exception $e) {
				$request->session()->flash('emsg', $e->errorInfo[2]);
				return redirect('/edit_profile');

			}


		}
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
