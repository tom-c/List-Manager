<?php

class Member extends CI_Model {
	
//	var $name = '';
//	var $email = '';
//	var $last_visit = '';
//	var $locations = ''; // Whiteladies Road, Bristol || Welsh Back, Bristol || Walcot Street, Bath
//	var $source = ''; // comment card / press / invitation / business card - the original source only
//	var $age_group = ''; // 18-25 || 26-40 || 40+
//	var $birthday = ''; // DD/MM/1900 (1900 is a CM default, if 0000 then clears the date)
//

//
//	// buisness fields?
//	var $job_title = '';
//	var $telephone = '';
//	var $mobile = '';
//	var $company = '';


	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_members($id = FALSE)
	{
		if($id === FALSE)
		{
			$query = $this->db->get('members');
			return $query->result_array();
		}
		$query = $this->db->get_where('members', array('id'=>$id));
		return $query->row_array();
	}
	
	
	function add_member()
	{
		$this->load->helper('date');

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'created' => timestamp_to_mysqldatetime(time()),
			'updated' => timestamp_to_mysqldatetime(time())
		);
		
		return $this->db->insert('members',$data);
	}
	
	
}