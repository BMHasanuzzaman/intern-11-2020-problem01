<?php
/**
 * 
 */
class signup_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	public function user_exist($uname){
		$this->username = $uname;
		$query = $this->db->query("SELECT username FROM user WHERE username = '$uname'");
		if ($query->num_rows()=== 1) {
			# code...
			return true;
		}
		else{
			return false;
		}
	}

	public function password_exist($md5_pw){
		$this->password = $md5_pw;
		$query = $this->db->query("SELECT password FROM user WHERE password = '$md5_pw'");
		if ($query->num_rows()=== 1) {
			# code...
			return true;
		}
		else{
			return false;
		}
	}


	public function getsignup($username,$password){
		$secure_hash = $this->own_hash($password);
		$this->db->query("INSERT INTO 'user'('$uname','$md5_pw') VALUES ('$username','$secure_hash')");
		return TRUE;
	}

	public function own_hash($input_pass)
	{
		$secure = password_hash($input_pass, PASSWORD_DEFAULT);
		return $secure;
	}
}
?>