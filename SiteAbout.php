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
    } else echo "<a href='SiteAbout.php?login=in'>LOG IN</a>";
    ?>
</div></nav></header>
<main>
    <?php
    require ("includes/shopbag.php");
    ?>
	<h1 class="midh" style="margin-top:-60px" >Why us?</h4>
	<p class="about"><img src="rrtt.jpg" class="photo-right">Watchshop is an official stockist for all watch brands listed on this website. Established in 1991 on the high street, Watch Shop is a leading retailer of brand name designer watches and is also the UK's most popular watch website*. Watch Shop was the first independent watch retailer to advertise on national television, and we pride ourselves on having one of the most efficient shopping systems available with communication at every stage to inform you of your order status, as well as excellent 7-days sales, customer service and support team who are glad to assist you with any enquiry.</p>

</main>
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
<script type="" src="includes/script.js"></script>

</body>