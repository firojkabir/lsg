<?php
class Locator_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

//-------------------global menu start ------------------//
	function get_sme_deposit_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_deposit');
		$result = $query->result();
		return $result;
	}	
	
	function get_sme_secureds_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_secured');
		$result = $query->result();
		return $result;
	}	
	
	function get_sme_special_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_special');
		$result = $query->result();
		return $result;
	}	
	
	function get_sme_unsecureds_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_unsecured');
		$result = $query->result();
		return $result;
	}	
	
	function get_sme_womans_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_woman');
		$result = $query->result();
		return $result;
	}	
	function get_retail_deposits_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('retail_deposits');
		$result = $query->result();
		return $result;
	}

	function get_retail_consumer_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('retail_consumer');
		$result = $query->result();
		return $result;

	}

	function get_retail_cards_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('retail_cards');
		$result = $query->result();
		return $result;

	}

	function get_retail_agricultural_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('retail_agricultural');
		$result = $query->result();
		return $result;

	}

	function get_retail_ebanking_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('retail_ebanking');
		$result = $query->result();
		return $result;

	}

	function get_sme_secured_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_secured');
		$result = $query->result();
		return $result;

	}

	function get_sme_unsecured_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_unsecured');
		$result = $query->result();
		return $result;

	}

	function get_sme_woman_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sme_woman');
		$result = $query->result();
		return $result;

	}

	function get_corporates_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('corporate_banking');
		$result = $query->result();
		return $result;

	}

	function get_islamics_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('islamic_banking');
		$result = $query->result();
		return $result;

	}

	function get_csrs_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('sustainability_csr');
		$result = $query->result();
		return $result;

	}

	function get_other_products_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('other_products');
		$result = $query->result();
		return $result;

	}

	function get_other_capital_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('other_capital');
		$result = $query->result();
		return $result;

	}

	function get_other_international_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('other_international');
		$result = $query->result();
		return $result;

	}

	function get_other_foreign_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('other_foreign');
		$result = $query->result();
		return $result;

	}

	function get_other_treasury_menu() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->order_by("rank", "ASC");
		$query = $this->db->get('other_treasury');
		$result = $query->result();
		return $result;

	}

//-------------------global menu end ------------------//


	function branch_list_search($division, $district, $area){


		$this->db->select('*');
		$this->db->join('division', 'division.div_id = locations_branch.division');
		$this->db->join('district', 'district.dis_id = locations_branch.district');
		$this->db->join('area', 'area.area_id = locations_branch.area');
		$this->db->where('status', '1');
		
		if ($division!=0) {

			if ($district==0) {
				$this->db->where('division', $division);
			}else{

				if ($area==0) {
					$this->db->where('division', $division);					
					$this->db->where('district', $district);
				} else {
					$this->db->where('division', $division);
					$this->db->where('district', $district);
					$this->db->where('area', $area);
				}
				

			}

		}

		$query = $this->db->get('locations_branch');
		$result = $query->result();
		return $result;
	}


	function atm_list_search($division, $district, $area){


		$this->db->select('*');
		$this->db->join('division', 'division.div_id = locations_atm.division');
		$this->db->join('district', 'district.dis_id = locations_atm.district');
		$this->db->join('area', 'area.area_id = locations_atm.area');
		$this->db->where('status', '1');
		
		if ($division!=0) {

			if ($district==0) {
				$this->db->where('division', $division);
			}else{
				if ($area==0) {
					$this->db->where('division', $division);
					$this->db->where('district', $district);
				} else {
					$this->db->where('division', $division);
					$this->db->where('district', $district);
					$this->db->where('area', $area);
				}
			}

		}

		$query = $this->db->get('locations_atm');
		$result = $query->result();
		return $result;
	}



	function get_area_list(){
		$this->db->order_by("area_id");
		$query = $this->db->get('area');
		return $query->result();
	}

	function get_division_list(){
		$this->db->order_by("div_id");
		$query = $this->db->get('division');
		return $query->result();
	}
	
	function get_district_list(){
		$this->db->order_by("dis_id");
		$query = $this->db->get('district');
		return $query->result();
	}

	function district_list_by_id($id){
		$query = $this->db->get_where('district',array('div_id' => $id));
		$result = $query->result();
		return $result;
	}

	function area_list_by_id($id){
		$query = $this->db->get_where('area',array('district_id' => $id));
		$result = $query->result();
		return $result;
	}

	function get_branch_list(){
		$this->db->where('status', '1');
		$this->db->order_by('branch_name','asc');
		$query = $this->db->get('locations_branch');
		return $query->result();
	}

	function get_atm_list(){
		$this->db->where('status', '1');
		$this->db->order_by('branch_name','asc');
		$query = $this->db->get('locations_atm');
		return $query->result();
	}


	function branch_list_by_id($id){
		$this->db->where('status', '1');
		$this->db->order_by('branch_name','asc');
		$query = $this->db->get_where('locations_branch',array('division' => $id, 'status' => 1 ));
		return $query->result();
	}

	function branch_details_by_id($id){
		$query = $this->db->get_where('locations_branch',array('bid' => $id, 'status' => 1));
		return $query->result();
	}

	function atm_list_by_id($id){
		$this->db->order_by('address','asc');
		$query = $this->db->get_where('locations_atm',array('division' => $id, 'status' => 1));
		return $query->result();
	}

	function atm_details_by_id($id){
		$query = $this->db->get_where('locations_atm',array('bid' => $id, 'status' => 1));
		return $query->result();
	}

	function branch_sub(){
		$query = $this->db->get_where('locations_branch');
		return $query->result();
	}

	function atm_sub(){
		$query = $this->db->get_where('locations_atm');
		return $query->result();
	}

	function branch_update($id, $data)//update branch
	{
		$this->db->where('bid', $id);
		$result = $this->db->update('locations_branch',$data);
		return $result;
	}

	function atm_update($id, $data){
		$this->db->where('bid', $id);
		$result = $this->db->update('locations_atm',$data);
		return $result;
	}


	function sme_sub(){
		$query = $this->db->get_where('locations_sme');
		return $query->result();
	}

	function sme_update($id, $data){
		$this->db->where('bid', $id);
		$result = $this->db->update('locations_sme',$data);
		return $result;
	}

    /////////////////------------------------/////////////////////

	function get_branch_list_map(){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_branch.division');

		$this->db->join('district', 'district.dis_id = locations_branch.district');

		$this->db->join('area', 'area.area_id = locations_branch.area');

		$this->db->where('status', '1');

		$query = $this->db->get('locations_branch');

		$result = $query->result();

		return $result;	

	}



	function get_branch_details_by_id_map($id){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_branch.division');

		$this->db->join('district', 'district.dis_id = locations_branch.district');

		$this->db->join('area', 'area.area_id = locations_branch.area');

		$this->db->where('status', '1');

		$this->db->where('bid', $id);

		$query = $this->db->get('locations_branch');

		$result = $query->result();

		return $result[0];	

	}

	function get_atm_list_map(){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_atm.division');

		$this->db->join('district', 'district.dis_id = locations_atm.district');

		$this->db->join('area', 'area.area_id = locations_atm.area');

		$this->db->where('status', '1');

		$query = $this->db->get('locations_atm');

		$result = $query->result();

		return $result;	

	}



	function get_atm_details_by_id_map($id){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_atm.division');

		$this->db->join('district', 'district.dis_id = locations_atm.district');

		$this->db->join('area', 'area.area_id = locations_atm.area');

		$this->db->where('status', '1');

		$this->db->where('bid', $id);

		$query = $this->db->get('locations_atm');

		$result = $query->result();

		return $result[0];	

	}


	function get_smecenter_list_map(){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_sme.division');

		$this->db->join('district', 'district.dis_id = locations_sme.district');

		$this->db->where('category', 'Branch');
		$this->db->where('status', '1');

		$query = $this->db->get('locations_sme');

		$result = $query->result();

		return $result;	

	}
	
	
	function get_smeservice_list_map(){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_sme.division');

		$this->db->join('district', 'district.dis_id = locations_sme.district');
		$this->db->where('category', 'Service');
		$this->db->where('status', '1');

		$query = $this->db->get('locations_sme');

		$result = $query->result();

		return $result;	

	}

	function get_islamiwindows_list_map(){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_islamibank.division');

		$this->db->join('district', 'district.dis_id = locations_islamibank.district');

		$this->db->where('status', '1');

		$query = $this->db->get('locations_islamibank');

		$result = $query->result();

		return $result;	

	}



	function get_smecenter_details_by_id_map($id){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_sme.division');

		$this->db->join('district', 'district.dis_id = locations_sme.district');

		$this->db->where('status', '1');

		$this->db->where('bid', $id);

		$query = $this->db->get('locations_sme');

		$result = $query->result();

		return $result[0];	

	}

	function get_islamiwindows_details_by_id_map($id){

		$this->db->select('*');

		$this->db->join('division', 'division.div_id = locations_islamibank.division');

		$this->db->join('district', 'district.dis_id = locations_islamibank.district');

		$this->db->where('status', '1');

		$this->db->where('bid', $id);

		$query = $this->db->get('locations_islamibank');

		$result = $query->result();

		return $result[0];	

	}


}