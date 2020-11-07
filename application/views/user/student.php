<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Registration</title>

</head>
<body>

<div id="container">
	<h1>Registration page</h1>

	
	<form role="form" method="post" action="<?php echo base_url('users/register_user'); ?>">	

      <div class="form-group" align="left">

      <h3>User Name</h3>
      <input class="form-control" placeholder="Please enter user name" name="uname" type="text" autofocus>
      
      <h3>Email</h3>
      <input class="form-control" placeholder="Please enter email" name="email" type="text" autofocus>
      
      <h3>Password</h3>
      <input class="form-control" placeholder="Please enter password" name="md5_pw" type="Password" autofocus>
      <h3>Valid</h3>
      <input type="radio" name="valid" value="Yes"> Yes 
      <input type="radio" name="valid" value="No"> No<br>
      <h3>Date</h3>
      <input class="Date"  name="cdate" type="date" autofocus>

      <h3><input type="submit" value="Register" name="register" ></h3>
      

      </div>
	</form>
</fieldset>
</div>

</body>
</html>