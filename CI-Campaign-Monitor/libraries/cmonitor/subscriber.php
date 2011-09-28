<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require_once 'cmonitor.php';

	/*
	 *
	 * Wrapper for subscriber api calls
	 * Extends CMonitor
	 * URL http://www.campaignmonitor.com/api/subscribers/
	 * 
	 * Author Matt Tullett matt@twelve20.co.uk @ouratelier
	 *
	 */

class Subscriber extends Cmonitor {
 
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->config('cmonitor', TRUE);
		$config = $this->CI->config->item('cmonitor');
		
		// All is done lets run like the cmonitor class
		parent::__construct($config);
	}
	
 
	/**
	 * Subscriber Add
	 *
	 * URL http://api.createsend.com/api/v3/subscribers/{listid}.{xml|json}
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	array
	 * @return		object
	 */	
	public function add($list, $subscriber, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request
		$result = $this->post_request('subscribers/'.$list.'.json', $subscriber, $options);
		return $result;
	}

	
	/**
	 * Subscriber update
	 *
	 * URL http://api.createsend.com/api/v3/subscribers/{listid}.{xml|json}?email={email}
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	array
	 * @param	array
	 * @return		object
	 */	
	public function update($list, $email, $update, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request
		$result = $this->put_request('subscribers/'.$list.'.json?email='.urlencode($email), $update, $options);
		return $result;
	}

	
	/**
	 * Subscriber import
	 *
	 * URL http://api.createsend.com/api/v3/subscribers/{listid}/import.{xml|json}
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	array
	 * @return		object
	 */	
	public function import($list, $subscribers, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request
		$result = $this->post_request('subscribers/'.$list.'/import.json', $subscribers, $options);
		return $result;
	}
	
	
	/**
	 *  Subscriber Details
	 *
	 * URL http://api.createsend.com/api/v3/subscribers/{listid}.{xml|json}?email={email}
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return		object
	 */	
	public function details($list, $email, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request		
		$result = $this->get_request('subscribers/'.$list.'.json?email='.urlencode($email), $options);
		return $result;
	}
	
	
	/**
	 *  Subscriber History
	 *
	 * URL http://api.createsend.com/api/v3/subscribers/{listid}/history.{xml|json}?email={email}
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return		object
	 */	
	public function history($list, $email, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request		
		$result = $this->get_request('subscribers/'.$list.'/history.json?email='.urlencode($email), $options);
		return $result;
	}
	
	
	/**
	 * Subscriber Unsubcribe
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return		object
	 */	
	public function unsubcribe($list, $subscriber, $options = array())
	{
		// get the list id based on a name
		$list = $this->get_list($list);
		// run the request		
		$result = $this->post_request('subscribers/'.$list.'/unsubscribe.json', $subscriber, $options);
		return $result;
	}
	
}
// END Cart Class

/* End of file subscriber.php */
/* Location: ./libraries/cmonitor/Subscriber.php */