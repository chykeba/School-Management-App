<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="user-header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" class="users">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Level</label>
  	  <input type="number" name="level" value="<?php echo $level; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn btn__visible" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
 