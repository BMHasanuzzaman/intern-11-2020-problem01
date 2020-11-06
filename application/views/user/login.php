<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Login</title>

</head>
<body>

<div id="container">
	<h1>Login page</h1>

	<form role="form" method="post" action="<?php echo base_url('register'); ?>">
		
      <div class="form-group">
      <h3>User Id</h3>
      <input class="form-control" placeholder="Please enter user id" name="userid" type="text" autofocus>
      <h3>User Name</h3>
      <input class="form-control" placeholder="Please enter user name" name="username" type="text" autofocus>
	  <h3>Email</h3>
      <input class="form-control" placeholder="Please enter email" name="email" type="text" autofocus>
	  <h3>Password</h3>
      <input class="form-control" placeholder="Please enter password" name="password" type="text" autofocus>

	  <h3><input type="submit" value="Login" name="login" ></h3>
	</form>
	</div>
	
	
</div>

</body>
</html>