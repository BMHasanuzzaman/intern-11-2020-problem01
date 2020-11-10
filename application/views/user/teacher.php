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
		
      <div class="form-group">
      <h3>User Name</h3>
      <input class="form-control" placeholder="Please enter user name" name="uname" type="text" autofocus>
      <h3>First Name</h3>
      <input class="form-control" placeholder="Please enter First Name" name="firstname" type="text" autofocus>
      <h3>Last Name</h3>
      <input class="form-control" placeholder="Please enter Last Name" name="lastname" type="text" autofocus>
      <h3>Email</h3>
      <input class="form-control" placeholder="Please enter email" name="email" type="text" autofocus>
      <h3>Password</h3>
      <input class="form-control" placeholder="Please enter password" name="password" type="password" autofocus>
      <h3>Valid</h3>
      <input type="radio" name="valid" value="Yes"> Yes 
      <input type="radio" name="valid" value="No"> No<br>
      <h3>Date</h3>
      <input class="Date"  name="cdate" type="date" autofocus>
      <h3>Gender</h3>
      <input class="form-control" placeholder="Please enter gender" name="gender" type="text" autofocus>
      <h3>Birth Date</h3>
      <input class="form-control" placeholder="Please enter birth date" name="bdate" type="text" autofocus>
      <h3>Address</h3>
      <input class="form-control" placeholder="Please enter address" name="address" type="text" autofocus>
      <h3>District</h3>
      <input class="form-control" placeholder="Please enter district" name="district" type="text" autofocus>
      <h3>Phone No</h3>
      <input class="form-control" placeholder="Please enter phone no" name="phone" type="text" autofocus>
      <h3>Session</h3>
      <input class="form-control" placeholder="Please enter session" name="session" type="text" autofocus>

      <h3><input type="submit" value="Register" name="register" ></h3>
      

      </div>
	</form>
</div>

</body>
</html>