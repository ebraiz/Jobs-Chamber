<?php
session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Admin Login</title>
		<link rel='stylesheet' href='includes/style.css' media='all' />
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<script src="lib/jquery-2.1.3.min.js"></script> 
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/validator.min.js"></script>

	</head>
<body background='images/background.jpg'>

<div  class="row">
<div class="col-sm-4"></div>

<div class="col-sm-5">
<form data-toggle="validator" class="form-horizontal" method="POST" action="startup.php">

<div class="form-group">
<div class="col-sm-10">
<h2 align='center'><?php /*echo @$_SESSION['error'];*/ echo @$_SESSION['logout']; ?></h2>
</div></div>

<div class="form-group">
<div class="col-sm-10">
<h2 align='center'>Admin Login</h2>
</div></div>

<div class="form-group">
<label class="control-label col-sm-4"><b>Admin Name:</b></label>
	<div class="col-sm-6">
		<input type="email" class="form-control input-sm" name="admin_name" maxlength="30" data-minlength="6" data-error="Invalid Name" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
<label class="control-label col-sm-4"><b>Admin Pass:</b></label>
	<div class="col-sm-6">
		<input type="password" class="form-control input-sm" name="admin_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" data-error="Invalid Password" required>
		<div class="help-block with-errors"></div>
    </div></div>

<div class="form-group">
<div class="col-sm-12">
<button type="submit" name="submit" class="btn btn-danger btn-sm width-84"><h3>Login</h3></button>
</div></div>

</form>

</div>

<div class="col-sm-3"></div>
</div>


</body>
</html>

<?php
include("includes/db.php");


if(isset($_POST['submit']))
{
	$admin_name = $_SESSION['admin_name'] = mysqli_real_escape_string($con,$_POST['admin_name']);
	$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$query = "select * from admin_login where user_name='$admin_name' AND user_pass='$admin_pass'";

	$run = mysqli_query($con,$query);
	if(mysqli_num_rows($run)==1)
	{
		$_SESSION['login_msg'] = "You are Logged in Successfully!";
		echo "<script>window.open('admin_panel.php','_self')</script>";
	}
	else{
		echo "<script>alert('Username or Password is incorrect!')</script>";		
	}
}
?>