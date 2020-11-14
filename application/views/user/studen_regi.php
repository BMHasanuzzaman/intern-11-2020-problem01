<div class="row justify-content-center">
	<div class="col-8">
		<h1>Student Registration Form</h1><br>

		<br><br>
    <?= form_open() ?>
		<div class="form-group">
			<label for="">Full Name</label>
			<input type="text" name="name" value="" class="form-control">
		</div>

		<div class="form-group">
			<label for="">User ID</label>
			<input type="text" name="uname" value="" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="md5_pw" value="" class="form-control">
		</div>


		<div class="form-group">
			<label for="">Valid</label>
			<input type="text" name="valid" value="" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Date</label>
			<input type="date" name="cdate" value="" class="form-control">
		</div>



<div>
	<label >Pick a Gender</label>
<select name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="other">Other</option>
</select>
</div>

<h3>Contact Info</h3>

<div class="form-group">
	<label for="">Email <i style="color: red"><?php echo form_error('email'); ?></i></label>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" class="form-control" />
</div>

<div class="form-group">
	<label for="">Mobile</label>
	<input type="text" name="phone" value="" class="form-control">
</div>




		<button type="submit" class="btn btn-primary">Register</button>
    <?= form_close() ?>

	</div>
</div>

</div>
