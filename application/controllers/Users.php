<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('Auth_model');
        $this->load->library('session');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');

}



	public function index()
	{
		$this->load->view('user/homepage');
	}

<<<<<<< Updated upstream
=======
	public function profile()
	{
		if(isset($_POST['logout'])){
            redirect("users/login","refresh");
		}
		$this->load->view('user/profile');
	}



>>>>>>> Stashed changes


	public function registration()
	{
		if(isset($_POST['sregister'])){
			$this-> form_validation->set_rules('uname', 'Username', 'required');
			$this-> form_validation->set_rules('student_id', 'Student_id', 'required');
			$this-> form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this-> form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this-> form_validation->set_rules('Gender', 'Gender', 'required');
			$this-> form_validation->set_rules('email', 'Email', 'required');
			$this-> form_validation->set_rules('phone', 'Phone', 'required');
			$this-> form_validation->set_rules('b_date', 'Birth Date', 'required');
			$this-> form_validation->set_rules('institute', 'Institute Name', 'required');
			if($this->form_validation->run()==TRUE){

                $data=array(
					'uname'=>$_POST['uname'],
					'student_id'=>$_POST['student_id'],
					'Gender'=>$_POST['Gender'],
					'u_type'=>'Student',
					'phone'=>$_POST['phone'],
					'institute'=>$_POST['institute'],
					'b_date'=>$_POST['b_date']
				);

				$data1=array(
					'uname'=>$_POST['uname'],
					'email'=>$_POST['email'],
					'password'=>md5($_POST['password']),
					'c_date'=>date('Y-m-d')
				);

				$this->db->insert('userdetail',$data);
				$this->db->insert('user',$data1);

				$this->session->set_flashdata("Succesfully Registered,You can login now!");

			} 
		}



		if(isset($_POST['tregister'])){
<<<<<<< Updated upstream
			$this-> form_validation->set_rules('uname', 'Username', 'required');
			$this-> form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this-> form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this-> form_validation->set_rules('Gender', 'Gender', 'required');
			$this-> form_validation->set_rules('email', 'Email', 'required');
			$this-> form_validation->set_rules('phone', 'Phone', 'required');
			$this-> form_validation->set_rules('address', 'Address', 'required');
			$this-> form_validation->set_rules('district', 'District Name', 'required');
			$this-> form_validation->set_rules('b_date', 'Birth Date', 'required');
			$this-> form_validation->set_rules('institute', 'Institute Name', 'required');
=======
			$this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('Gender', 'Gender', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('district', 'District Name', 'required');
			$this->form_validation->set_rules('b_date', 'Birth Date', 'required');
			$this->form_validation->set_rules('institute', 'Institute Name', 'required');
>>>>>>> Stashed changes
			if($this->form_validation->run()==TRUE){
				$data=array(
					'uname'=>$_POST['uname'],
					'Gender'=>$_POST['Gender'],
					'u_type'=>'Teacher',
					'phone'=>$_POST['phone'],
					'institute'=>$_POST['institute'],
					'b_date'=>$_POST['b_date'],
					'address'=>$_POST['address'],
					'district'=>$_POST['district']
				);

				$data1=array(
					'uname'=>$_POST['uname'],
					'email'=>$_POST['email'],
					'password'=>md5($_POST['password']),
					'c_date'=>date('Y-m-d')
				);

				$this->db->insert('userdetail',$data);
				$this->db->insert('user',$data1);

				

				$this->session->set_flashdata("Succesfully Registered,You can login now!");
			} 
		}

        if(isset($_POST['login_button'])){
<<<<<<< Updated upstream
            $this->load->view('user/login');
=======
            redirect("users/login","refresh");
>>>>>>> Stashed changes
		}
		$this->load->view('user/registration');
	}




	public function login()
	{
<<<<<<< Updated upstream
        $this-> form_validation->set_rules('uname', 'Username', 'required');
			
		$this-> form_validation->set_rules('password', 'Password', 'required|min_length[5]');
=======
	  if(isset($_POST['login'])){
        $this->form_validation->set_rules('uname', 'Username', 'required');
			
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
>>>>>>> Stashed changes

		if ($this->form_validation->run()==TRUE){

		   $uname=$_POST['uname'];
		   $password=md5($_POST['password']);
<<<<<<< Updated upstream
=======
		  
>>>>>>> Stashed changes


		   $this->db->select('*');
		   $this->db->from('user');
		   $this->db->where(array('uname'=>$uname,'password'=>$password));
		   $query=$this->db->get();

		   $user =$query->row();

<<<<<<< Updated upstream
		   if($user->email){

			  $this->session->set_flashdata("Success","You are logged in");


			  $_SESSION['user_logged']==TRUE;
			  $_SESSION['uname']==$user->uname;

			


		   } else{
			   $this->session->set_flashdata("Error","No such accounte Exits.");
			  
		   }
		


		}


		if(isset($_POST['register'])){
            $this->load->view('user/registration');
=======
		   if($user){

			  $this->session->set_flashdata("Success","You are logged in");
			  redirect("users/profile","refresh");

		   } else{
			   $this->session->set_flashdata("Error","No such accounte Exits.");
			   echo 'Username or Password is wrong. Try Agin!!';
			   
			  
		   }
		
		}}


		if(isset($_POST['register'])){
            redirect("users/registration","refresh");
>>>>>>> Stashed changes
		}
		$this->load->view('user/login');
	}
  
}
