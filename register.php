<?php
require_once('processer_register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Register</title>
</head>
<body>
<div class="container">
  <div class="container_title">
    <h3>Đăng kí thành viên</h3>
  </div>
  <div class="container_body">
    <form action="" method='post'>
      <div class="form_group">
        <label>Họ Tên</label>
        <input type="text" name='fullname' value="<?=$fullname?>" class="form_control">
      </div>
      <div class="form_group">
        <label>User name</label> 
        <input type="text" name='username' value="<?=$username?>" class="form_control">
      </div>
      <div class="form_group">
        <label>Password</label>
        <input type="password" name='password'  class="form_control">
      </div>
      <div class="form_group">
        <label>Confirm Password</label>
        <input type="password" name='confirmpassword' class="form_control">
      </div>
      <div class="form_group">
        <label>Email</label>
        <input type="email" name='email' value="<?=$email?>" class="form_control">
      </div>
      <div class="form_group">
        <label>Birthday Date</label>
        <input type="date" name='date' value="<?=$date?>" class="form_control">
      </div>

      <div class="form_group">
        <label>Giới Tính</label> <br>
        <input type="radio" name='gender' value='Nam' class='form_gender' checked>Nam <br>
        <input type="radio" name='gender' value='Nu' class='form_gender' >Nu
      </div>
      <div class="form_group">
        <label>Phone Number</label>
        <input type="number" name='phonenumber' value="<?=$phonenumber?>" class="form_control">
      </div>
      <div class="form_group">
        <label>Address</label>
        <input type="text" name='address' value="<?=$address?>" class="form_control">
      </div>
      <div class="form_group">
       <button type='submit' >Register</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>