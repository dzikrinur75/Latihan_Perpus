<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('Auth/Login');
		$this->load->view('templates/auth_footer');
	}

	public function Registration()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('Auth/Registration');
		$this->load->view('templates/auth_footer');
	}
	
}