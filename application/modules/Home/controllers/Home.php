<?php

class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->template->call_frontend_template();
	}
}