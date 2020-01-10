<?php
namespace App\Helpers;

use DB;

class LocationHelper
{
	public static function division(){
		$results = DB::table('division')->orderBy('div_id', 'ASC')->get();
		return $results;
	}

	public static function district(){
		$results = DB::table('district')->orderBy('dis_id', 'ASC')->get();
		return $results;
	}

	public static function allbranch(){
		$results = DB::table('locations_branch')->orderBy('branch_name', 'ASC')->get();
		return $results;
	}

}