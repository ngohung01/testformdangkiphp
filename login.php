<?php
require_once('processer_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Login</title>
</head>
<body>
<div class="container">
  <div class="container_title">
    <h3>Đăng kí thành viên</h3>
  </div>
  <div class="container_body">
    <form action="" method='post'>
      <div class="form_group">
        <label>User name</label> 
        <input type="text" name='username' class="form_control">
      </div>
      <div class="form_group">
        <label>Password</label>
        <input type="password" name='password' class="form_control">
      </div>
      <div class="form_group">
       <button type='submit' >Login</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>