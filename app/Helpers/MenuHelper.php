<?php
namespace App\Helpers;

use App\Models\FirstProducts;
use App\Models\SecondProducts;
use App\Models\ThirdProducts;
use DB;

class MenuHelper
{
	
	public static function personal(){
		$results = DB::table('personal_main')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function personal_banner($pid){
		$results = DB::table('personal_main')->where('id', $pid)->first();
		return $results;
	}

	public static function personalFirstSub($id){
		$results = DB::table('personal_product')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function personalFirstSub_banner($pid){
		$results = DB::table('personal_product')->where('id', $pid)->first();
		return $results;
	}

	public static function personalSecondSub($id){
		$results = DB::table('personal_subproduct')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}


	public static function business(){
		$results = DB::table('business_main')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function business_banner($pid){
		$results = DB::table('business_main')->where('id', $pid)->first();
		return $results;
	}

	public static function businessFirstSub($id){
		$results = DB::table('business_product')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}
	public static function businessFirstSub_banner($pid){
		$results = DB::table('business_product')->where('id', $pid)->first();
		return $results;
	}

	public static function businessSecondSub($id){
		$results = DB::table('business_subproduct')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}
	

	public static function digitalBanking(){
		$results = DB::table('digital')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function learningCenter(){
		$results = DB::table('learning')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	
	public static function paymentRecharge(){
		$results = DB::table('payments_recharge')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function paymentBills(){
		$results = DB::table('payments_bills')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function productGrow(){
		$results = DB::table('grow')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function productGrowSub($id){
		$results = DB::table('grow_sub')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function subPeople($id){
		$results = DB::table('aboutus_subpeople')->where('status', 1)->where('pid', $id)->orderBy('rank', 'ASC')->get();
		return $results;
	}

	public static function majorCorrespondent(){
		$results = DB::table('aboutus_correspondent')->first();
		return $results->file_path.$results->file;
	}

	public static function recoveryPolicy(){
		$results = DB::table('home_policy')->first();
		return $results->file_path.$results->file;
	}

	public static function unclaimed(){
		$results = DB::table('home_unclaimed')->first();
		return $results->file_path.$results->file;
	}

	public static function code(){
		$results = DB::table('home_code')->first();
		return $results->file_path.$results->file;
	}

	public static function dirReport(){
		$results = DB::table('investor_drreports')->first();
		return $results->file_path.$results->file;
	}

	public static function corporateGovernence(){
		$results = DB::table('investor_corporate')->first();
		return $results->file_path.$results->file;
	}

	public static function interestRateDeposit(){
		$result = DB::table('home_deposit')->first();
		return $result;
	}

	public static function contactus(){
		$result = DB::table('aboutus_contactus')->first();
		return $result;
	}

	public static function footer_link(){
		$result = DB::table('footer_link')->first();
		return $result;
	}

	public static function popup(){
		$result = DB::table('home_popup')->first();
		return $result;
	}

}