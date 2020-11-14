<?php
	/**
	*
	*/
	class Sample extends CI_Model
	{
		protected $User_table_name = "user";
    protected $User_table_name2 = "userdetail";

		public function insert_user($userData) {
        return $this->db->insert('user', $userData);
    }
		public function insert_user2($userData) {
        return $this->db->insert('userdetail', $userData);
    }
		public function check_login($userData) {

        /**
         * First Check Email is Exists in Database
         */

        $query = $this->db->get_where($this->User_table_name, array('email' => $userData['email']));
        $query2 = $this->db->get_where($this->User_table_name2, array('email' => $userData['email']));
        if ($this->db->affected_rows() > 0) {

            $password = $query->row('md5_pw');

            /**
             * Check Password Hash
             */
            if (password_verify($userData['password'], $password) === TRUE) {

                /**
                 * Password and Email Address Valid
                 */
                return [
                    'status' => TRUE,
                    'data' => $query->row(),
                    'data2'=>$query2->row(),
                ];
            } else {
                return ['status' => FALSE,'data' => FALSE];
            }

        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }
	}
