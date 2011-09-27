<?php

class Member extends CI_Model {
	
	var $name = '';
	var $email = '';
	var $visit_date = '';	
	var $location = ''; // Whiteladies Road, Bristol || Welsh Back, Bristol || Walcot Street, Bath
	var $source = ''; // comment card / press / invitation / business card
	var $age_group = ''; // 18-25 || 26-40 || 40+
	var $birthday = ''; // DD/MM/1900 (1900 is a CM default, if 0000 then clears the date)

	var $staff_rating = ''; // E|G|A|P
	var $service_rating = ''; // E|G|A|P
	var $food_rating = ''; // E|G|A|P
	var $drinks_rating = ''; // E|G|A|P
	var $ambience_rating = ''; // E|G|A|P
	var $value_rating = ''; // E|G|A|P

	// buisness fields?
	var $job_title = '';
	var $telephone = '';
	var $mobile = '';
	var $company = '';
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	function add_member()
	{
		//$this->name = '';
		$this->email = '';
		$this->visit_date = '';
		//$this->
	}
	
	
}