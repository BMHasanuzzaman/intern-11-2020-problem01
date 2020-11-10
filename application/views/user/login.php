<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Login</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/design.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>
    <div class="container">
    <div class="jumbotron">
    <div id="container">

<h1><center>Login</center></h1>
<div class="container">

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    
    <?= form_open() ?>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control <?= (form_error('email') == "" ? '':'is-invalid') ?>" placeholder="Enter Email"> 
            <?= form_error('email'); ?>            
        </div>      
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control <?= (form_error('password') == "" ? '':'is-invalid') ?>" placeholder="Password">
            <?= form_error('password'); ?> 
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    <?= form_close() ?>
</div>
</div>
</div>
</div>
</body>
</html>