<?php if (!empty($this->session->userdata('USER_ID')) && $this->session->userdata('USER_ID') > 0) { ?>
                    <!-- User isLogin -->
                    <p>
                        <!-- if session is logged in, then data pass to database here(user_session) -->

                        <?php
                        $insert_data3 = array(
                            'user_id' => $this->session->userdata('USER_ID'),
                            'session_id'=> session_id(),
                            'browser' => $this->agent->browser(),
                            'ipaddress' => $_SERVER['REMOTE_ADDR'],
                            'os' => $this->agent->platform(),
                          );
                          $get_session = $this->db->get_where('user_session', array('session_id'=>session_id()));
                          $session_id = $get_session->row('session_id');
                          if($session_id != session_id()){
                            $this->db->insert('user_session',$insert_data3);


                        }

                        date_default_timezone_set('Asia/Dhaka');

                        $datetime = date('Y-m-d H:i:s');

                        $get_id = $this->db->get_where('user_session', array('session_id'=>session_id()));
                        $sid = $get_id->row('id');

                        $get = $this->db->get_where('user_activity', array('id'=>$sid,'pageurl'=>current_url(),'title'=>$page_title)); // checking if entity exist.
                        $res = $get->row('numbers_time'); // collecting results.

                        if($get->num_rows()>0){  // checking condition by row count
                            $count = $res + 1;
                            $this->db->where(array('id'=>$sid));
                            $this->db->update('user_activity', array('numbers_time'=>$count)); // Updating the existing entity.
                        }
                        else {
                            // insert entity using insert query

                            $url = array(
                            'id' => $sid,
                            'pageurl' => current_url(),
                            'title'=>$page_title,
                            'request_datetime'=> $datetime,
                        );

                        $this->db->insert('user_activity', $url);
                        }


                        ?>
                    </p>

                <?php } else { ?>
                    <!-- User not Login -->
                    <p>
                        <!-- if session not logged in, then data pass to database here(user_session) -->
                        <?php
                        $insert_data3 = array(
                            'session_id'=> session_id(),
                            'browser' => $this->agent->browser(),
                            'ipaddress' => $_SERVER['REMOTE_ADDR'],
                            'os' => $this->agent->platform(),
                          );
                          $get_session = $this->db->get_where('user_session', array('session_id'=>session_id()));
                          $session_id = $get_session->row('session_id');
                          if($session_id != session_id()){
                            $this->db->insert('user_session',$insert_data3);
                          }
                          date_default_timezone_set('Asia/Dhaka');

                          $datetime = date('Y-m-d H:i:s');

                          $get_id = $this->db->get_where('user_session', array('session_id'=>session_id()));
                          $sid = $get_id->row('id');

                          $get = $this->db->get_where('user_activity', array('id'=>$sid,'pageurl'=>current_url(),'title'=>$page_title)); // checking if entity exist.
                          $res = $get->row('numbers_time'); // collecting results.

                        if($get->num_rows()>0){  // checking condition by row count
                            $count = $res + 1;
                            $this->db->where(array('id'=>$sid));
                            $this->db->update('user_activity', array('numbers_time'=>$count)); // Updating the existing entity.
                        }
                        else {
                            // insert entity using insert query

                            $url = array(
                            'id' => $sid,
                            'pageurl' => current_url(),
                            'title'=>$page_title,
                            'request_datetime'=> $datetime,
                        );

                        $this->db->insert('user_activity', $url);
                        }

                          ?>

                        <?php } ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
