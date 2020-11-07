<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>eLRL-eLearning Research Lab BUET</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>

<div id="container">
	<div class="col-md-6">
		<h1>Registration Form</h1>
		<div class="panel panel-default">
			<div class="panel-heading">Register</div>
			<div class="panel-body">
				<form method="post action"<?php echo base_url();?>registration/validation">
					<div class="form-group">
						<label>User name</label>
						<input type="text" name="uname" class="form-control" value="<?php echo set_value('uname'); ?>" placeholder = "user name"/>
						<span class="text-danger"><?php echo form_error('uname'); ?></span>
					</div>
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" />
						<span class="text-danger"><?php echo form_error('name'); ?></span>
					</div>
					<div class="form-group">
						<label>User ID</label>
						<input type="text" name="studentid" class="form-control" value="<?php echo set_value('studentid'); ?>" />
						<span class="text-danger"><?php echo form_error('studentid'); ?></span>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="text" name="gender" class="form-control" value="<?php echo set_value('gender'); ?>" />
						<span class="text-danger"><?php echo form_error('gender'); ?></span>
					</div>
					<div class="form-group">
						<label>Designation</label>
						<input type="text" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>" />
						<span class="text-danger"><?php echo form_error('designation'); ?></span>
					</div>
					<div class="form-group">
						<label>User type</label>
						<input type="text" name="utype" class="form-control" value="<?php echo set_value('utype'); ?>" />
						<span class="text-danger"><?php echo form_error('utype'); ?></span>
					</div>
					<div class="form-group">
						<label>Birth date</label>
						<input type="text" name="bdate" class="form-control" value="<?php echo set_value('bdate'); ?>" />
						<span class="text-danger"><?php echo form_error('bdate'); ?></span>
					</div>
					<div class="form-group">
						<label>Updated date</label>
						<input type="text" name="udate" class="form-control" value="<?php echo set_value('udate'); ?>" />
						<span class="text-danger"><?php echo form_error('udate'); ?></span>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>" />
						<span class="text-danger"><?php echo form_error('address'); ?></span>
					</div>
					<div class="form-group">
						<label>District</label>
						<input type="text" name="district" class="form-control" value="<?php echo set_value('district'); ?>" />
						<span class="text-danger"><?php echo form_error('district'); ?></span>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" />
						<span class="text-danger"><?php echo form_error('phone'); ?></span>
					</div>
					<div class="form-group">
						<label>Session</label>
						<input type="text" name="session" class="form-control" value="<?php echo set_value('session'); ?>" />
						<span class="text-danger"><?php echo form_error('session'); ?></span>
					</div>
					<div class="form-group">
						<input type="submit" name="registration" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>

		
		</div>
	</div>
</div>
	

</body>
</html>