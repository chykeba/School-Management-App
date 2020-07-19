<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="user-header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php" class="users">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn__visible" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a registered? <a href="register.php">Register here</a>
  	</p>
  </form>
</body>
</html>