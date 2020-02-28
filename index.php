<?php
include('config.php');
session_start();
if(isset($_POST['loginn']))
{

?>

<script>
alert('WELCOME');
window.location='login.php';
</script>

<?php
}

if(isset($_POST['regi']))
{

?>

<script>
alert('WELCOME');
window.location='register.php';
</script>

<?php
}

?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;
background:#ffdbe9}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
		<a href="#home" class="w3-bar-item w3-button">WASTE MANAGEMENT SYSTEM</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Methods</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	  <a href="login.php" class="w3-bar-item w3-button" NAME="loginn">LOGIN</a>
	  <a href="register.php" class="w3-bar-item w3-button" NAME="regi">REGISTER</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">GO GREEN</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="https://as1.ftcdn.net/jpg/01/15/30/06/500_F_115300606_0S6zk2CwPOMaewtKVkmGhbuoTPymuRnl.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750" length="800">
	  <img class="ss" src="tenor2.gif"  height="360" width="500"></img>

    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center"><b>WASTE MANAGEMENT DEPARTMENT</b></h1><br>
      <h5 class="w3-center">Lets build the world together</h5>
      <p class="w3-large">Waste management (or waste disposal) are the activities and actions required to manage waste from its inception to its final disposal. This includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process.

Waste can be solid, liquid, or gaseous and each type has different methods of disposal and management. Waste management deals with all types of waste, including industrial, biological and household. In some cases, waste can pose a threat to human health. Waste is produced by human activity, for example, the extraction and processing of raw materials. Waste management is intended to reduce adverse effects of waste on human health, the environment or aesthetics. Lets start with
 <span class="w3-tag w3-light-grey">India</span> ,our country.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">With rapid urbanisation, the country is facing massive waste management challenge. Over 377 million urban people live in 7,935 towns and cities and generate 62 million tonnes of municipal solid waste per annum. Only 43 million tonnes (MT) of the waste is collected, 11.9 MT is treated and 31 MT is dumped in landfill sites. Solid Waste Management (SWM) is one among the basic essential services provided by municipal authorities in the country to keep urban centres clean. However, almost all municipal authorities deposit solid waste at a dumpyard within or outside the city haphazardly. Experts believe that India is following a flawed system of waste disposal and management.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">WASTE MANAGEMENT METHODS</h1><br>
      <h4>Landfill</h4>
      <p class="w3-text-grey">The Landfill is the most popularly used method of waste disposal used today. This process of waste disposal focuses attention on burying the waste in the land</p><br>
    
      <h4>Incineration</h4>
      <p class="w3-text-grey"> Incineration or combustion is a type disposal method in which municipal solid wastes are burned at high temperatures so as to convert them into residue and gaseous products. .</p><br>
    
      <h4>Recycling</h4>
      <p class="w3-text-grey"> Recycling is the process of converting waste products into new products to prevent energy usage and consumption of fresh raw materials</p><br>
    
      <h4>Plasma gasification</h4>
      <p class="w3-text-grey">Plasma gasification is another form of waste management. Plasma is a primarily an electrically charged or a highly ionized gas. Lighting is one type of plasma which produces temperatures that exceed 12,600 �F </p><br>
    
      <h4>Recovery</h4>
      <p class="w3-text-grey"> Resource recovery is the process of taking useful discarded items for a specific next use. These discarded items are then processed to extract or recover materials and resources or convert them to energy in the form of useable heat, electricity or fuel.</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="https://thumbnails-visually.netdna-ssl.com/4-methods-of-proper-waste-management_5502abe72c723_w1500.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%" >
	   <img src="https://www.researchtrends.com/wp-content/uploads/2011/01/article_3_19_fig_1.gif" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%" >
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>Lets all come together to make the world a better place to live in..</p>
    <p class="w3-text-blue-grey w3-large"><b>SWEJAAN WASTE DEPARTMENT , COIMBATORE</b></p>
    <p>You can also contact us by phone 00553123-2323 or email waste@gmail.com, or you can send us a message here:</p>
	   <form action="" target="_blank">
	<a href=”tel:+919092546560″>Click to call</a>


 
     <!-- <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Phone number" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Address" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Complaints" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>-->
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->


</body>
</html>

