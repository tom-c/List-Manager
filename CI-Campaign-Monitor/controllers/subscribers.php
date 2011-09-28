<?php

class Subscribers extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
				
		// Load the Campaign monitor library subscribers
		$this->load->library('cmonitor/subscriber');
	}

	
	function index()
	{
		echo 'Campaign Monitor Subscribers example functions';
	}


	/*
	 * 
	 * Add a subscriber to a list
	 *
	 */
	function add()
	{	
		$subscriber = array(
			'EmailAddress' => 'example@example.com',
			'Name' => 'username',
			'Resubscribe' => TRUE
	    );
		
		$result = $this->subscriber->add('test', $subscriber);
		if($result)
		{
			echo 'yep all was good and this is what was returned '.$result->http_status_code;
			print_r($result);
		}
		else
		{
			print_r($result);
		}
	}
	
	/*
	 * 
	 * Get an existing subscriber details
	 *
	 */
	function details()
	{
		$email = 'example@example.com';
		$result = $this->subscriber->details('test', $email);
		if($result->was_successful())
		{
			echo 'yep all was good and this is what was returned '.$result->http_status_code;
			print_r($result);
		}
		else
		{
			print_r($result);
		}
    }
	
	
	/*
	 * 
	 * Get an existing subscriber history
	 *
	 */
	function import()
	{
		$subscribers = array(
			array(
				'EmailAddress' => 'example@example.com',
				'Name' => 'username',
			),
			array(
				'EmailAddress' => 'example1@example.com',
				'Name' => 'username1',
			),
			array(
				'EmailAddress' => 'example2@example.com',
				'Name' => 'username2',
			)
		);
		
		$subscribers = array(
		    'Subscribers' => $subscribers,
			 'Resubscribe' => TRUE,
        );
		
		$result = $this->subscriber->import('test', $subscribers);
		if($result->was_successful())
		{
			echo 'yep all was good and this is what was returned '.$result->http_status_code;
			print_r($result);
		}
		else
		{
			print_r($result);
		}
    }
	
	
	/*
	 * 
	 * Get an unsubscribe a subscriber
	 *
	 */
	function unsubcribe()
	{
		$subscriber = array(
			'EmailAddress' => 'example@example.com'
	    );
		$result = $this->subscriber->unsubcribe('test', $subscriber);
		if($result->was_successful())
		{
			echo 'yep all was good and this is what was returned '.$result->http_status_code;
			print_r($result);
		}
		else
		{	
			print_r($result);
		}
	}
}
	
/* End of file subsribers.php */
/* Location: ./application/controllers/subscribers.php */