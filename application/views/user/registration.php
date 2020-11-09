<div class="row justify-content-center">
	<div class="col-8">
		<h1>Registration page</h1><br>
		<?php echo "<b>session variable value is: </b>".$ses->testvar; ?>
		<br><br>
		<?php
			// echo validation_errors();
		?>

		<?php
			// echo form_open();
		?>
		<form method="post">

		<div class="form-group">
			<label for="">User name</label>
			<input type="text" name="name" value="" class="form-control">
		</div>
  	<div class="form-group">
			<label for="">Email <i style="color: red"><?php echo form_error('email'); ?></i></label>
			<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" class="form-control" />
		</div>

		<div class="form-group">
			<input type="submit" value="Submit" class="btn btn-primary" />
		</div>

		</form>
	</div>
</div>
