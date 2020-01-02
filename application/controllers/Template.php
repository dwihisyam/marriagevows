<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function template1()
	{
		$this->load->view('template1');
	}

	public function template2()
	{
		$this->load->view('template2');
	}

	public function template3()
	{
		$this->load->view('template3');
	}
}
