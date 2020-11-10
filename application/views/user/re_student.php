<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
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
    <div id="container">
<h1><center>Student Registration</center></h1>
<div class="container">

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    
    <?= form_open() ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control <?= (form_error('username') == "" ? '':'is-invalid') ?>" placeholder="Enter Userame">  
            <?= form_error('username'); ?>           
        </div>
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
        <div class="form-group">
            <label>Password Confirmation</label>
            <input type="password" name="passconf" value="<?= set_value('passconf'); ?>" class="form-control <?= (form_error('passconf') == "" ? '':'is-invalid') ?>" placeholder="Password Confirmation">
            <?= form_error('passconf'); ?> 
        </div>
        <div class="form-group">
            <label>valid</label>
            <input type="text" name="valid" value="<?= set_value('valid'); ?>" class="form-control <?= (form_error('valid') == "" ? '':'is-invalid') ?>" placeholder="valid yes or no">
            <?= form_error('passconf'); ?> 
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="cdate" value="<?= set_value('date'); ?>" class="form-control <?= (form_error('date') == "" ? '':'is-invalid') ?>">  
            <?= form_error('cdate'); ?>           
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    <?= form_close() ?>
</div>
</div>
</div>
</div>
</body>
</html>