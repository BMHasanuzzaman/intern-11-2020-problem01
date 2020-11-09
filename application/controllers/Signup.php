<?php
/**
 * 
 */
class Signup extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('signup_model','signup');
	}
	
	public function index()
	{
		$this->load->view('signup_view');
	}

	public function reg(){

		$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[30]}xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|min_length[8]|max_length[20]}xss_clean|is_unique[user.username]|alpha_dash');

		if ($this->form_validation->run()== FALSE) {
			$this->index();
		}
		else {
			$name = $this->input->post("username");
			$password = $this->input->post("password");

			$isDone = $this->signup->getsignup($username,$password);

			if ($isDone == TRUE) {
				$this->load->view('thanks');
			}
		}
	}


	}

	
?>