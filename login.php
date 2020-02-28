<?php

include('config.php');
$db = mysqli_connect("localhost","root","","waste_mgmt") or die('Server error');
session_start();
if(isset($_POST['log']))
{
	//register();

$USERNAME=$_POST['username'];
$PASSWOORD=$_POST['password'];
		$admin_query = "select * from register where uname='$USERNAME' AND pwd='$PASSWOORD' ";
		$run = mysqli_query($db,$admin_query);
    
if ($USERNAME == "SWE" && $PASSWOORD == "123") {
?> <script> window.location='compaintdata.php';</script>
<?php

} 
elseif (empty($_POST["username"])) {
   ?>

<script>  alert('Empty field');
 </script>
 <?php
  }
  elseif (empty($_POST["password"])) {
   ?>

<script>  alert('Empty field');
 </script>
 <?php
  }
    elseif(mysqli_num_rows($run)==1)
    {
      $_SESSION['username']=$USERNAME;
      echo "<script>window.open('welcome.php','_self')</script>";
    }
    else {

      echo "<script>alert('login UnSuccessfull!')</script>";
	  ?>
	  <script>
	  window.location='login.php';
	  </script>
<?php
    }

?>


<?php


if (empty($USERNAME)) {
//		array_push($errors, "Username is required");
		echo "bye";
	}
	if (empty($PASSWOORD)) {
		//array_push($errors, "Password is required");
	}


}
elseif(isset($_POST['regisss']))
{
?>
<script>
window.location='register.php';
</script>
<?php
}
//}

?>




<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>LOGIN</TITLE>
    </HEAD>

<STYLE>

body
{

	margin: 0;
	padding: 0;
	width: 100%;
	height: 100vh;
	background: #000;
	opacity:1;
	font-family: sans-serif;
}
.login-form
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 300px;
	padding: 60px 40px;
	background: rgba(255,255,255,.8);
	box-shadow: 0 15px 20px rgba(0,0,0,.2);
}
.login-form h2
{
	margin: 0 0 40px;
	padding: 0;
	text-align: center;
}
.login-form .form-input
{
	position: relative;
	margin: 20px 0;
}
.login-form .form-input input
{
	outline: none;
	height: 40px;
	padding: 10px;
	box-sizing: border-box;
	width: 100%;
	border: 1px solid rgba(0,0,0,.5);
	background: transparent;
	font-size: 18px;
}
.login-form .form-input input[type="submit"]
{
	background: #4c0121;
	color: #FFF;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
}
.login-form .form-input input[type="submit"]:hover
{
	background: #0090ff;
}
.login-form .forget
{
	display: block;
	margin-top: 30px;
	color: #000;
	font-weight: bold;
}

</STYLE>
<body style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf809FFAYW_Vwe-8EpwensBegEKkgDI0TbwmFDpLNwVk-ZHtBqBQ);width:300px;height:200px;color:black;font-size:18px;">
	 <div 
class="login-form">
		<h2>Sign In</h2>
		<form name="form1" method="post" onSubmit="required()">
		<div class="form-input">
			<input type="text" name="username" placeholder="Email">
		</div>

		<div class="form-input">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-input">
			<input type="submit" name="log" value="Login">
		</div>
	<!--<div class="form-input">
		<form action="register.php">
    <input type="submit" value="No Account? Register!" />
</form>

</div>-->
<div class="form-input">
			<input type="submit" name="regisss" value="No Account? Register!">
		</div>
	
		</form>
	</div>
	

</body>

</HTML>
