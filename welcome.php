<?php
$db = mysqli_connect("localhost","root","","waste_mgmt") or die('Server error');
session_start();

if(isset($_POST['submit'])){

?>
<script> window.location='login.php';</script>
<?php
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #a1045a;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ff9f99;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: centre;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: centre;
}
th {
background-color: #ff9f99;
color: black;
}
tr:nth-child(even) {background-color: #f2f2f2}
.login-form
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 500px;
	padding: 60px 40px;
	background: rgba(255,255,255,.8);
	box-shadow: 0 15px 20px rgba(0,0,0,.2);
}
.k{
	width: 70px;
height: 30px


}
p{
outline: none;
	height: 40px;
	padding: 10px;
	box-sizing: border-box;
	width: 100%;
	border: 1px solid rgba(0,0,0,.5);
	background: transparent;
	font-size: 18px;

}
</style>
</head>
<body>

<div class="topnav">
<a class="active" href="#home">Home</a>
<a  href="http://localhost/waste_management/complaint.php">COMPLAIN</a>
      <a> <b> <center> WASTE MANAGEMENT DATABASE  </center></b> </a>
  <div class="search-container">
    <form method="post" >
     
      <input class="k" name="submit" value="LOGOUT" type="submit"></input>
	  
    </form>
  </div>
</div>


<?php
// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
//}
//$sql = "SELECT `id`, `name`,`email` FROM `register` WHERE id=''";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
// output data of each row
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
//. $row["email"]. "</td></tr>";
//}
//echo "</table>";
//} else { echo "0 results"; }
//$conn->close();
$getid=$_SESSION['username'];

//$qdispdetails="SELECT * FROM `register` WHERE `id`='$getid'";

$runenqdetails=mysqli_query($db,"SELECT * FROM `register` WHERE `uname`='$getid'");

while($row=mysqli_fetch_array($runenqdetails))

{
@$varid=$row['id'];

@$varname=$row['name'];

@$varemail=$row['email'];

@$varphone=$row['pno'];

@$varstat=$row['city'];


}

@$g=$_SESSION['status'];

?>
<h1 style="color:purple;", align="center"> <b> YOUR DETAILS </b></h1>
<div class="login-form">
<p ><b> Id  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :</b> &nbsp; &nbsp;<?php echo @$varid;?></p>

<p> <b>Name  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; : </b>&nbsp<?php echo @$varname;?></p>

<p> <b>Email &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;:</b>&nbsp; <?php echo @$varemail;?></p>

<p> <b>Phone no &nbsp; :</b>&nbsp;<?php echo @$varphone;?></p>
<p> <b>City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</b> &nbsp;<?php echo @$varstat;?></p>
<p> Your complaint status is  <?php echo "pending";   ?></p>
</div>
</tr>

</body>
</html>

