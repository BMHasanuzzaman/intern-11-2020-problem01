<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  function __construct(){
      parent::__construct(); // needed when adding a constructor to a controller
			$this->load->library('session');
      $this->load->model('sample');
  }
	public function index()
	{
		$data['ses'] = $this->session;
		$data['page'] = "user/homepage";
		$this->load->view('layout/public/master', $data);
	}
	public function registration()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE)
    {
            echo "There is some error in form";
    }
    else
    {
            echo "This form works fine";
    }

		$data['ses'] = $this->session;
		$data['page'] = "user/registration";
		$this->load->view('layout/public/master', $data);
	}
	public function login()
	{
		$data['ses'] = $this->session;
		$data['page'] = "user/login";
		$this->load->view('layout/public/master', $data);
	}
}
