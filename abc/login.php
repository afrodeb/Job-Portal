<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="a">
<img src="new logo.jpg"/>

</div>


<div id="b">

<h1> Job Application Management System </h1>

</div>

<div id="c">

<h1> J.A.M.S </h1>
</div>


<br/>
<br/>
<br/>
<br/>
<br/>
	<div class="header">
		<h2>Log In</h2>
	</div>
	
	<form method="post" action="login.php">

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
			<button type="submit" class="btn" name="login_user">Log In</button>
		</div>
		<p>
		  <a href="forgot_password.php">forgot password?</a>
		</p>
	</form>

</body>
</html>