<?php
defined('BASHPATH')	OR exit('No direct script access allowed');

/**
 * 
 */
class Register extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		#$this->load->library('encrypt');
		$this->load->model('Register_model');
	}

	function index()
	{
		$this->load->view('registration');
	}
}
?>