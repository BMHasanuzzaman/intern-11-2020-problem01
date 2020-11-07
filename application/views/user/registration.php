<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>eLRL-eLearning Research Lab BUET</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>

<div id="container">
	<h1>Registration Form</h1>
	<div class="panel panel-default">
		<div class="panel-heading">Register</div>
		<div class="panel-body">
			<form method="post action"<?php echo base_url();?>registration/validation">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="uname" class="form-control" value="<?php echo set_value('uname'); ?>" />
					<span class="text-danger"><?php echo form_error('uname'); ?></span>
				</div>
			</form>
		</div>

	
	</div>

</body>
</html>