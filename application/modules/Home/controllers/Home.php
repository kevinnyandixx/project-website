<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo ASSETS_URL;
	}
}