<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">		
<link rel="stylesheet" type="text/css" href="style2.css">
<script src='jquery-3.3.1.min.js'></script>
	<title>MYSITE</title>
</head>
<body>

<?php require ("includes/connection.php");  ?>

<?php
/*
$contents = [
        $ru =>[
    $header
    $header2
    $sitedemo
    $siteshop
    $siteabout
    $sitefaq
    $sitecontact
    $basket
    $main
    $main2
        ]
        $en =>[

        ]
]
*/
?>
<header>
    <div class="header___logo"><p><font style="color:#4e8b62">Watch</font><font color="#598b30">shop</font></p>

        <div class="header___l"><p>Best watch shop in the world!</p></div></div></header>

<nav>
    <?php require ("includes/login.php");  ?>
    <?php //require ("includes/registration.php");
    ?>
	<div class="topnav" id="MyTopNav">
		<a href="SiteDemo.php">home</a>
		<a href="SiteShop.php">shop</a>
		<a href="SiteAbout.php">about</a>
		<a href="SiteFAQ.php">faq</a>
		<a href="SiteContact.php">contact</a>
        <?php
        if (isset($_SESSION['auth'])){
            $sessionname=$_SESSION['name'];
            echo "<a class='korzina' href='includes/shopbag.php'>$sessionname</a>" ;
        } else echo "<a href='SiteContact.php?login=in'>LOG IN</a>";
        ?>
</div></nav></header>
<main>
    <?php
    require ("includes/shopbag.php");
    ?>
	<div class="contact">
<h1 class="midh" style="margin-top:-60px" >Contact us</h1>
	<p>
500 Terry Francois St.<br/>
San Francisco, CA 94158<br/>
info@mysite.com<br/>
Tel: 123-456-7890<br/></p>
<div class="">
<input type="text" name="t1" placeholder="Name">
<input type="text" name="t1" placeholder="Email"><br/>
<input type="text" name="t1" placeholder="Subject"><br/>
<textarea name="t1" placeholder="Message" cols="22" rows="6"></textarea><br/>
<input type="submit" name="Send" value="Send" style="height:40px;width: 160px; margin-left: 37px;"></div>
<div class="map">
<h3>Our location</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};

  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</div>
</div>
	</div>
	  <div class="footer" style="margin-top:-100px; height:80px">
  	<div class="container">
  		<div class="row">
  			<div class="col-4">
  				&#169Made by me in 2018
            </div>
       <div class="col-4" style="margin-left: 84%;margin-top:-30px;">
	    <p class="footer__social-icons">

		<a href="#" target="_blank"><img class="icon" src="icons/instagramm.png"></a>

		<a href="#" target="_blank"><img class="icon" src="icons/vk.png"></a>

		<a href="#" target="_blank"><img class="icon" src="icons/twitter.png"></a>
         </div>
	</p>
</div>
      </div>
  	</div>
  </div>
</main>
<script type="" src="includes/script.js"></script>
</body>