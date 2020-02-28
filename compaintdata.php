<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
.k{
	width: 70px;
height: 30px


}
th {
background-color: #B22222;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<form method="post">
<div class="topnav">
  <a class="active" href="#home"></a>
      <a> <b> <center> COMPLAINTS  </center></b> </a>
	
     
      <input class="k" name="submit" value="LOGOUT" type="submit"></input>
	  
 
	  </div>
<table>
<tr>
<th>Name  </th>
<th>Reason</th>
<th>Status</th>
<th>Address</th>


</tr>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "waste_mgmt");
// Check connection

if(isset($_POST['submit'])){

?>
<script> window.location='login.php';</script>
<?php
}

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = mysqli_query($conn,"SELECT G_id, name, reason, status, address FROM grievance");

while($row=mysqli_fetch_array($sql))

{
@$vari= $row['G_id'];
@$varid=$row['name'];

@$varname=$row['reason'];

@$varemail=$row['status'];

@$varphone=$row['address'];

?>
<tr>
<td> <?php echo @$varid;?></td>

<td> <?php echo @$varname;?></td>

<td><?php echo @$varemail;?>  			<input align="right" type="submit" name="si" value="Work on it">
</td>

<td><?php echo @$varphone;?></td>


</tr>

<?php
if(isset($_POST['si']))
{
	//register();
mysqli_query($conn,"UPDATE grievance SET status = 'ongoing' where G_id='$vari'");
}

}
//$su=$_POST['status'];
 //$_SESSION['status']=$su;


?>

</table>
</form>
</body>
</html>