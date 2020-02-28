<?php

//include('config.php');
$db = mysqli_connect("localhost","root","","waste_mgmt") or die('Server error');
session_start();
if(isset($_POST['reg']))
{

$name = $_POST['name'];
$date = $_POST['date'];
$reason = $_POST['reason'];
$status = $_POST['status'];
$address = $_POST['address'];






mysqli_query($db,"INSERT INTO `grievance`(`G_id`, `name`, `Date`, `reason`, `status`, `address`) VALUES (NULL,'
$name','$date','$reason','$status','$address')") or die("Erroorrrr....");

?>
<script> window.location='welcome.php'; </script>
<?php


}

?>




<!DOCTYPE html>
<html>
    <script>
        function validates() {
  var name = document.myform.name.value;
  
  if (name >'a'&& name <'z'|| name >'A' && name <'Z') {
    alert("valid name");
    return false;
  }
  else  {
    alert("no number in name space");
    return false;
  }
}



    </script>
<meta charset="utf-8">
<title>form</title>
<style>
 /*dark background to support form theme*/
body{
background-color: #e16176;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 90px;
  height: 20px;
  margin-left: -210px;
  /* -1/2 width */
  margin-top: -360px;
}

/*sass variables used*/
$full:100%;
$auto:0 auto;
$align:center;

@mixin disable{
  outline:none;
  border:none;
}

@mixin easeme{
  -webkit-transition:1s ease;
  -moz-transition:1s ease;
  -o-transition:1s ease;
  -ms-transition:1s ease;
  transition:1s ease;
}

/*site container*/
.wrapper{
  width:420px;
  margin:$auto;
}

h1{
  text-align:$align;
  padding:30px 0px 0px 0px;
  font:25px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  margin:0px;
}

p{
  font:13px Open Sans;
  color:#ffffff;
  text-shadow:#000 0px 1px 5px;
  margin-bottom:30px;
}

.form{
  width:$full;
}

input[type="text"],input[type="email"],input[type="number"]{
  width:98%;
  padding:15px 0px 15px 8px;
  border-radius:5px;
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
	background:darkgrey;
  @include disable;
  border:1px solid rgba(0,0,0,1);
  margin-bottom:10px;
  color:#ffffff;
  text-color:#ffffff;
}
input[type="password"]{
 width:98%;
  padding:15px 0px 15px 8px;
  border-radius:5px;
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
	background:darkgrey;
  @include disable;
  border:1px solid rgba(0,0,0,1);
  margin-bottom:10px;
  color:#ffffff;
  text-color:#ffffff;

}

input[type="submit"]{
  width:100%;
  padding:15px;
  border-radius:5px;
  @include disable;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font:14px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  border:1px solid #000;
  opacity:0.7;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
}

input:focus{
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.7), 0 1px 1px -1px rgba(255,255,255,0.3);
  background:rgba(0,0,0,0.3);
  @include easeme;
}

input[type="submit"]:hover{
  opacity:1;
  cursor:pointer;
}

.name-help,.email-help{
  display:none;
  padding:0px;
  margin:0px 0px 15px 0px;
}

.optimize{
  position:fixed;
  right:3%;
  top:0px;
}
.s{
  position:fixed;
  right:5%;
  top:150px;
}
.ss{
  position:fixed;
  left:5%;
  top:150px;
}
    </style>
<body>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
 

<div class="wrapper">
  <h1><center>Register your Complaint</center></h1>
  <p><center>Please enter the proper information and address</center></p>
 
  <form class="form" method="post" >
    <input type="text" NAME='name' class="name" placeholder="Name">
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>
   <b>DATE:</b> <input type="date"  NAME='Date' placeholder="Date">
     <div>
      <p class="email-help">Please enter your current email address.</p>
    </div>
	</br>
		</br>
	
	 <input type="text"  NAME='reason' class="name" placeholder="Reason">
	<b>STATUS:</b> <select class="name" name="status">
  <option value="pending">pending</option>
  <option value="ongoing">ongoing</option>
  <option value="resolved">resolved</option>
</select>
</br>
</br>
	  <input type="text" NAME='address' class="name" placeholder="Address">
	  
    <input type="submit" class="submit" name='reg' value="Submit">
  </form>
</div>

<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


</script>
</body>



</html>