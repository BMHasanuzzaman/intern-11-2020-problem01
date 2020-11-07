<?php


class profile extends CI_Controller
{

    public function __construct()
    {
         parent::__construct();
         if(!isset($_SESSION[user_logged])){
             $this->session->set_flashdata("Error", "Login first to view this page");
             redirect("user/login");
         }
    }


     public function profile()
     {
         $this->load->view('profile');

     }


}