<?php
session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Voice Based Transport Enquiry system</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/img/favicon.ico" />
        <link rel="stylesheet" href="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/iCheck/all.css" /> 

        <!-- Icons -->
        <link href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/icons/themify-icons/themify-icons.css" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/css/main-style.min.css">
        <link rel="stylesheet" href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/css/skins/all-skins.min.css">

        <link rel="stylesheet" href="../../../Users/Swethu/Downloads/Telegram Desktop/resources/css/demo.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112423372-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112423372-2');
</script>

</head>
    <body class="skin-blue login-page" background="../../../Users/Swethu/Downloads/Telegram Desktop/images/bgb.jpg">
        <div class="box-login">
            <div class="box-login-body">
				<h3 style="font-size: 2em;font-family: 'Open Sans';color: red; font-weight: bold; "><span><b>Admin Console</b></span></h3>
                <h3 style="font-size: 1.8em;font-family: 'Open Sans'; font-weight: bold; "><span><b>Voice Based Transport Enquiry system<br></br></b></span></h3>
               
                <form class="login-form" action="../../../Users/Swethu/Downloads/Telegram Desktop/adminlogin.php" method="post">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <input class="form-control" type="text" name="aname" placeholder="User ID" autofocus required/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group input-group">
                        <div class="checkbox">
                            <label for="terms" style="padding-left: 12px;">
                                <input class="icheck_flat_20" type="checkbox" id="terms"> Remember Me
                            </label>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-block btn-default">Sign In</button>
						
                    </div>
                   
                </form>
				<a href="../../../Users/Swethu/Downloads/Telegram Desktop/login.php"><button  name="ulogin" class="btn btn-block btn-default">Sign In as User</button></a>
            </div>
        </div>
       
<!-- JS scripts -->
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/jQuery/jquery-2.2.3.min.js"></script>
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/iCheck/icheck.min.js"></script>
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/resources/js/pages/jquery-icheck.js"></script>
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/vendor/fastclick/fastclick.min.js"></script>
        <script src="../../../Users/Swethu/Downloads/Telegram Desktop/resources/js/demo.js"></script>
    </body>
	<?php

include('connect.php');

if (isset($_POST['login'])) {

   $aname = $_POST['aname'];
   $pwd = $_POST['password'];
	$admin_query = "select * from admin where aname='$aname' AND password='$pwd' ";
	$run = mysqli_query($connect,$admin_query);
	  

    if(mysqli_num_rows($run)>0)
    {
      $_SESSION['username']=$aname;
      echo "<script>window.open('adminmain.php','_self')</script>";
    }
    else {
      echo "<script>alert('login UnSuccessfull!')</script>";
    }
}
?>

<?php
	include('connect.php');
	if (isset($_POST['ulogin'])) {
		echo "<script>window.open('login.php','_self')</script>";
	}
?>
</html>