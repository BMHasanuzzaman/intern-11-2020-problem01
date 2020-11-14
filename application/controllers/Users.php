<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->helper('url'); // needed when adding a constructor to a controller
			$this->load->library('session');
      $this->load->model('sample');
  }
	public function index()
	{
		$data['ses'] = $this->session;
		$data['page'] = "user/homepage";
		$this->load->view('layout/public/master', $data);
    $this->load->model('sample');
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

            $insert_data = array(
                'name' => $this->input->post('name', TRUE),
                'uname' => $this->input->post('uname', TRUE),
                'email' => $this->input->post('email', TRUE),
                'valid' => $this->input->post('valid', TRUE),
                'md5_pw' => password_hash($this->input->post('md5_pw', TRUE), PASSWORD_DEFAULT),
                'cdate' => $this->input->post('cdate', TRUE));
             $insert_data2 = array(
                'phone' => $this->input->post('phone', TRUE),
                'email' => $this->input->post('email', TRUE),
                'designation'=>"Student",
                'gender' => $this->input->post('gender', TRUE)

              );


               $this->load->model('sample','Model');
              $result = $this->Model->insert_user($insert_data);
              $result2 = $this->Model->insert_user2($insert_data2);

              if ($result && $result2 == TRUE) {

                echo ' registration success';
            } else {

                echo ' Try Again';
                redirect('Users/registration');

            }

    }

		$data['ses'] = $this->session;
		$data['page'] = "user/registration";
		$this->load->view('layout/public/master', $data);

	}
  public function login()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('layout/public/header'); // Header File
          $this->load->view("user/login");
          $this->load->view('layout/public/footer'); // Footer File
        }
        else
        {
            $login_data = array(
                'email' => $this->input->post('email', TRUE),
                'password' => $this->input->post('password', TRUE),
            );

            /**
             * Load User Model
             */
            $this->load->model('sample', 'UserModel');
            $result = $this->UserModel->check_login($login_data);

            if (!empty($result['status']) && $result['status'] === TRUE) {

                /**
                 * Create Session
                 * -----------------
                 * First Load Session Library
                 */
                $session_array = array(
                    'USER_ID'  => $result['data']->id,
                    'USER_NAME'  => $result['data']->name,
                    'USERNAME'  => $result['data']->uname,
                    'USER_EMAIL' => $result['data']->email,
                    'IS_ACTIVE'  => $result['data']->valid,
                    'Designation' => $result['data2']->designation,
                );

                $this->session->set_userdata($session_array);



                //Login message
                $this->session->set_flashdata('success_flashData', 'Login Success');
                redirect('Users/first_page');

            } else {

                $this->session->set_flashdata('error_flashData', 'Invalid Email/Password.');
                redirect('Users/login');
            }
        }
    }

  public function studen_regi()
  {
    $this->load->helper(array('form'));
		$this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('layout/public/header'); // Header File
      $this->load->view("user/studen_regi");
      $this->load->view('layout/public/footer'); // Footer File
    }
    else
    {

            $insert_data = array(
                'uname' => $this->input->post('uname', TRUE),
                'email' => $this->input->post('email', TRUE),
                'valid' => $this->input->post('valid', TRUE),
                'md5_pw' => password_hash($this->input->post('md5_pw', TRUE), PASSWORD_DEFAULT),
                'cdate' => $this->input->post('cdate', TRUE));
             $insert_data2 = array(
                 'name' => $this->input->post('name', TRUE),
                 'uname' => $this->input->post('uname', TRUE),
                'phone' => $this->input->post('phone', TRUE),
                'email' => $this->input->post('email', TRUE),
                'designation'=>"Student",
                'gender' => $this->input->post('gender', TRUE)

              );


               $this->load->model('sample','Model');
              $result = $this->Model->insert_user($insert_data);
              $this->load->model('sample','Model');
              $result2 = $this->Model->insert_user2($insert_data2);

              if ($result && $result2 == TRUE) {

                echo ' registration success';
            } else {

                echo ' Try Again';
                redirect('Users/studen_regi');

            }

    }

  }

  public function teacher_regi()
  {
    $this->load->helper(array('form'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('layout/public/header'); // Header File
      $this->load->view("user/teacher_regi");
      $this->load->view('layout/public/footer'); // Footer File
    }
    else
    {

            $insert_data = array(
                'uname' => $this->input->post('uname', TRUE),
                'email' => $this->input->post('email', TRUE),
                'valid' => $this->input->post('valid', TRUE),
                'md5_pw' => password_hash($this->input->post('md5_pw', TRUE), PASSWORD_DEFAULT),
                'cdate' => $this->input->post('cdate', TRUE));
             $insert_data2 = array(
                 'name' => $this->input->post('name', TRUE),
                 'uname' => $this->input->post('uname', TRUE),
                'phone' => $this->input->post('phone', TRUE),
                'email' => $this->input->post('email', TRUE),
                'gender' => $this->input->post('gender', TRUE),
                'designation' => $this->input->post('designation', TRUE)

              );


               $this->load->model('sample','Model');
              $result = $this->Model->insert_user($insert_data);
              $this->load->model('sample','Model');
              $result2 = $this->Model->insert_user2($insert_data2);

              if ($result && $result2 == TRUE) {

                echo ' registration success';
            } else {

                echo ' Try Again';
                redirect('Users/teacher_regi');

            }

    }

  }

  public function first_page()
	{

    $this->load->view('layout/public/header'); // Header File
    $this->load->view("user/first_page");
    $this->load->view('layout/public/footer'); // Footer File

	}


}
