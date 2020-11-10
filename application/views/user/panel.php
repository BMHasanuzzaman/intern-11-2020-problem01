
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Registration</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/design.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>
    <div class="container">
    <div class="jumbotron">

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    <div class="jumbotron">
    	<h3>Control Panel</h3>
    </div>
    
    <div class="jumbotron">
        <h3 class="display-5">Welcome</h3>
        <hr class="my-4">
        <h3 class="display-6">Email :  <?= $this->session->userdata('USER_EMAIL') ?></h3>
        <h3 class="display-6">Active: <?= $this->session->userdata('IS_ACTIVE') ?></h3>

        <a href="<?= base_url('Users/logout') ?>" class="btn btn-danger my-2 my-sm-0">Logout</a>

        
</div>
</div>
</div>
</body>
</html>
