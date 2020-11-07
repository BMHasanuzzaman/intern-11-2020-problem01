<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		$this->load->view('user/homepage');
	}



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
            $this->load->view('user/login');
		}
		$this->load->view('user/registration');
	}




	public function login()
	{
        $this-> form_validation->set_rules('uname', 'Username', 'required');
			
		$this-> form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if ($this->form_validation->run()==TRUE){

		   $uname=$_POST['uname'];
		   $password=md5($_POST['password']);


		   $this->db->select('*');
		   $this->db->from('user');
		   $this->db->where(array('uname'=>$uname,'password'=>$password));
		   $query=$this->db->get();

		   $user =$query->row();

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
		}
		$this->load->view('user/login');
	}
}
