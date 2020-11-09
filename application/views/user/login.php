<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Welcome to Login Page</title>
  </head>
  <body>
		<div class="container">
		
			<div class="row align-self-center">
				<div class="col-lg-6 col-lg-offset-3 ">
				<h1 class=text-center>User Login Form</h1>

				<?php if (isset($_SESSION['success'])){ ?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                  <?php
<<<<<<< Updated upstream
                }  ?>    
=======
                }  ?>  
				
>>>>>>> Stashed changes
				<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
				<form action="" method="POST">  
					<div class="from-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="uname" type="text" class="form-control" name="uname" placeholder="User Name">
					</div>
					<div class="from-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password">
					</div>

					<div>
							<button class="btn btn-default" name="login">Login</button>
					</div>
					<div>
							<button class="btn btn-default" name="register">Go to Register</button>
					</div>
			    </form>
				</div>
			</div>
		</div> 
  
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->
  </body>
</html>