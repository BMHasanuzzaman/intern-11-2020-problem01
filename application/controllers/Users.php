<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('model');
        $this->load->library('session');

}
	public function index()
	{
		$this->load->view('user/homepage');
	}
	public function registration()
	{
		$this->load->view('user/registration');
	}
	public function login()
	{
		$this->load->view('user/login');
	}
	public function teacher()
	{
		$this->load->view('user/teacher');
	}
	public function student()
	{
		$this->load->view('user/student');
	}

	public function register_user()
	{
		$user=array(
      'uname'=>$this->input->post('uname'),
      'email'=>$this->input->post('email'),
      'md5_pw'=>md5($this->input->post('md5_pw')),
      'cdate'=>$this->input->post('cdate'),
      'valid'=>$this->input->post('valid'),
  );
		$user2=array(
      'uname'=>$this->input->post('uname'),
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'gender'=>$this->input->post('gender'),
      'bdate'=>$this->input->post('bdate'),
      'address'=>$this->input->post('address'),
      'district'=>$this->input->post('district'),
      'phoneno'=>$this->input->post('phoneno'),
      'session'=>$this->input->post('session'),





        );

        
        print_r("successfully created. Please Login");

		$email_check=$this->model->email_check($user['email']);

		if($email_check){
		  $this->model->register_user($user,$user2);
		  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');

		}
		else{

		  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
		  
		  redirect('Users/registration');
		}
	}

}
