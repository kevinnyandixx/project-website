<?php

class Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$base_url = base_url();
	}

	function index()
	{
		$data['content_view'] = 'Dashboard/dashboard_v';
		$data['page_header'] = 'Dashboard';
		$data['title'] = 'Dashboard';
		// $data['page_action'] = (object)array('href' =>  base_url() . "Dashboard/add", 'title' => 'Add Dashboard');
		$this->template->call_admin_template($data);
	}
}