<?php

use RandomLib\Factory as RandomLib;

class MY_Controller extends MX_Controller
{
	 protected $RandomLib;
	function __construct()
	{
		parent::__construct();
		$factory = new RandomLib;
        $this->RandomLib = $factory->getMediumStrengthGenerator();
		$this->load->module('template');
	}
}