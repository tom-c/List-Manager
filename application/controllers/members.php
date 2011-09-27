<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function index()
	{
		$this->load->model('Member','',TRUE);
		
		$this->load->view('members');
	}
	
	
	
}