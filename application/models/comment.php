<?php

class Comment extends CI_Model {
	
	//	var $staff_rating = ''; // E|G|A|P
	//	var $service_rating = ''; // E|G|A|P
	//	var $food_rating = ''; // E|G|A|P
	//	var $drinks_rating = ''; // E|G|A|P
	//	var $ambience_rating = ''; // E|G|A|P
	//	var $value_rating = ''; // E|G|A|P
	
	public function __construct()
	{
		$this->load->database();
	}
	

}