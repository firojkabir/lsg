<?php
namespace App\Helpers;

use DB;

class SiteHelper
{
	public static function awards(){
		$results = DB::table('aboutus_awards')->where('hstatus', 1)->orderBy('date', 'DESC')->limit(6)->get();
		return $results;
	}

	public static function chairmanMsg(){
		$results = DB::table('people_chairmanmsg')->first();
		return $results;
	}

	public static function mdMsg(){
		$results = DB::table('people_mdmsg')->first();
		return $results;
	}

	public static function serveProducts(){
		$results = DB::table('home_serve')->where('status', 1)->orderBy('rank', 'ASC')->get();
		return $results;
	}

}