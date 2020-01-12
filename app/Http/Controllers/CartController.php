<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use DB;
use Cart;

class CartController extends Controller
{

	public function add(Request $request){
		$userID = Auth::guard('client')->id();
		$rowID = str_random(10);

		$id = $request->id;

		$product = DB::table('products')->where('id', $id)->first();

		if ($product) {
			$push = array(
				'id' => $rowID,
				'product_id' => $product->id,
				'name' => $product->title,
				'price' => $product->price,
				'quantity' => 1,
				'image' => $product->thumb,
				'path' => $product->path,
				'description' => $product->description
			);
			if(Cart::session($userID)->add($push)){
				echo "Product added to cart!";
			}else{
				echo "Something went wrong!".Cart::content()->count();
			}
		}else{
			echo "Product is not available right now!";
		}

	}

	public function delete(Request $request){
		$userID = Auth::guard('client')->id();
		$rowID = $request->id;
		Cart::session($userID)->remove($rowID);

	}
}
