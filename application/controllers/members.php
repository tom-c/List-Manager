<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member');
	}
	
	public function index()
	{
		$data['members'] = $this->member->get_members();
		
		$data['title'] = 'All Members';

		$this->load->view('templates/header', $data);
		$this->load->view('members/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($id)
	{
		$data['member'] = $this->member->get_members($id);
		
		if (empty($data['member'])) show_404();
		
		$data['title'] = $data['member']['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('members/view', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function create()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a member';
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('members/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->member->add_member();
			$this->load->view('members/success');
		}
	}
	
}