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
    $data['page_title'] = "homepage";
    $this->load->view('layout/public/header', $data);
		$this->load->view('user/homepage');
    $this->load->view('layout/public/footer', $data);
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

    $data['page_title'] = "Registration";
    $this->load->view('layout/public/header', $data);
		$this->load->view('user/registration');
    $this->load->view('layout/public/footer', $data);

	}
  public function login()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
          $data['page_title'] = "Login";
          $this->load->view('layout/public/header', $data);
      		$this->load->view('user/login');
          $this->load->view('layout/public/footer', $data);
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

              session_regenerate_id();

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
      $data['page_title'] = "Student Register";
      $this->load->view('layout/public/header', $data);
  		$this->load->view('user/studen_regi');
      $this->load->view('layout/public/footer', $data);
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
                redirect('Users/login');
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
      $data['page_title'] = "Teacher Registration";
      $this->load->view('layout/public/header', $data);
  		$this->load->view('user/teacher_regi');
      $this->load->view('layout/public/footer', $data);
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
                redirect ('Users/login');
            } else {

                echo ' Try Again';
                redirect('Users/teacher_regi');

            }

    }

  }

  public function first_page()
	{
    $data['page_title'] = "First Page";
    $this->load->view('layout/public/header', $data);
		$this->load->view('user/first_page');
    $this->load->view('layout/public/footer', $data);



    }

    public function test()
   {
       $data['page_title'] = "Test Page";
       $this->load->view('_Layout/home/header.php', $data); // Header File
       $this->load->view("user/test");
       $this->load->view('_Layout/home/footer.php'); // Footer File


   }

    public function set_active_time() {
       //getdatafromajaxcall
       $active_time = $this->input->post('timeSpentOnSite');
       $this->db->insert('user_activity',$active_time);
       //query to match id & url
       $this->db->where('id', $id);
       $this->db->where('pageurl', $pageurl);
       $query1 = $this->db->get('user_activity');
       //update database active time
           $this->db->set('active_time', "active_time+'$active_time'", FALSE);
           $this->db->where('id', $id);
           $this->db->where('pageurl', $pageurl);
           $this->db->update('user_activity');
   }


   public function logout()
   {
    $remove_sessions = array('USER_ID', 'USERNAME','USER_EMAIL','IS_ACTIVE', 'USER_NAME');
    $this->session->unset_userdata($remove_sessions);
     session_destroy();


     redirect('users/index');
   }

}
