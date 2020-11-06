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

	
	<form role="form" method="post" action="<?php echo base_url('register'); ?>">
		
      <div class="form-group">
      <h3>User Id</h3>
      <input class="form-control" placeholder="Please enter user id" name="userid" type="text" autofocus>
      <h3>First Name</h3>
      <input class="form-control" placeholder="Please enter First Name" name="firstname" type="text" autofocus>
      <h3>Last Name</h3>
      <input class="form-control" placeholder="Please enter Last Name" name="lastname" type="text" autofocus>
      <h3>Gender</h3>
      <input class="form-control" placeholder="Please enter gender" name="gender" type="text" autofocus>
      <h3>Designation</h3>
      <input class="form-control" placeholder="Please enter designation" name="designation" type="text" autofocus>
      <h3>Birth Date</h3>
      <input class="form-control" placeholder="Please enter birth date" name="birthdate" type="text" autofocus>
      <h3>Address</h3>
      <input class="form-control" placeholder="Please enter address" name="address" type="text" autofocus>
      <h3>District</h3>
      <input class="form-control" placeholder="Please enter district" name="district" type="text" autofocus>
      <h3>Phone No</h3>
      <input class="form-control" placeholder="Please enter phone no" name="phoneno" type="text" autofocus>
      <h3>Session</h3>
      <input class="form-control" placeholder="Please enter session" name="session" type="text" autofocus>

      <h3><input type="submit" value="Register" name="register" ></h3>
      

      </div>
	</form>
</div>

</body>
</html>