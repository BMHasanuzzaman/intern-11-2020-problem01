<?php
class model extends CI_model{
 
 
 
public function register_user($user,$user2){
 
 
$this->db->insert('user', $user);
$this->db->insert('userdetail', $user2);
 
}

 
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}
 
 
}

 
 
?>