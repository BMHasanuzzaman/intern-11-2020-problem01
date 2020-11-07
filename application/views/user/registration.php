<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <link src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <title>Welcome to Register Page</title>
  </head>
  <body>
	<div class="container">
	    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#student">Student</a></li>
        <li><a data-toggle="tab" href="#teacher">Teacher</a></li>
      </ul>

  


      <div class="tab-content">
        <div id="student" class="tab-pane fade in active"> 

          <div class="col-lg-8 col-lg-offset-2">
            <h1 class="text-center">Student Registration Form</h1>

          <?php if (isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
          <?php
          }  ?>
          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>  
          <form action="" method="POST">  
            <div class="form-group">
                <label for="uname" >User Name</label>
                <input class="form-control" name="uname" id="uname" type="text">
            </div>
            <div class="form-group">
                <label for="student_id">Student Id</label>
                <input class="form-control" name="student_id" id="student_id" type="number">
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="form-control" name="password2" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select class="form-control" name="Gender" id="Gender" type="radio">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>     
            </div>
            <div class="form-group">
                <label for="email" >Email</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            
            <div class="form-group">
                <label for="phone" >Phone</label>
                <input class="form-control" name="phone" id="phone" type="number">
            </div>
            <div class="form-group">
                <label for="b_date" >Birth Date</label>
                <input class="form-control" name="b_date" id="b_date" type="date">
            </div>
            <div class="form-group">
                <label for="institute">Institute Name</label>
                <input class="form-control" name="institute" id="institute" type=text>
            </div>
            <div class="text-center">
                <button class="btn btn-default" name="sregister">Register</button>
            </div>

            <div class="text-center">
                <button class="btn btn-default" name="login_button">Go to Login</button>
            </div>
          </form>  
          </div>
        </div> 







        <div id="teacher" class="tab-pane fade"> 

          <div class="col-lg-8 col-lg-offset-2">
            <h1 class="text-center">Teacher Registration Form</h1>
            <div class="form-group">


          <?php if (isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
          <?php
          }  ?>    
          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>  
          <form action="" method="POST">  
                <label for="uname" >User Name</label>
                <input class="form-control" name="uname" id="uname" type="text">
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="form-control" name="password2" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select class="form-control" name="Gender" id="Gender" type="radio">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>     
            </div>
            <div class="form-group">
                <label for="email" >Email</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            
            <div class="form-group">
                <label for="phone" >Phone</label>
                <input class="form-control" name="phone" id="phone" type="number">
            </div>
            <div class="form-group">
                <label for="Address" >Address</label>
                <input class="form-control" name="address" id="address" type="text">
            </div>
            <div class="form-group">
                <label for="district" >District</label>
                <select class="form-control" name="district" id="district" type="radio">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Chittagong">Chittagong</option>
                </select>
            </div>
            <div class="form-group">
                <label for="b_date" >Birth Date</label>
                <input class="form-control" name="b_date" id="b_date" type="date">
            </div>
            <div class="form-group">
                <label for="institute">Institute Name</label>
                <input class="form-control" name="institute" id="institute" type="text">
            </div>
            <div class="text-center">
                <button class="btn btn-default" name=tregister>Register</button>
            </div>

            <div class="text-center">
                <button class="btn btn-deafault" name="login_button">Go to Login</button>
            </div>
          </form>
          </div>
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