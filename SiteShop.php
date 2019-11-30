<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">		
<link rel="stylesheet" type="text/css" href="style2.css">
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
			<script src='jquery-3.3.1.min.js'></script>
	<title>Shop</title>
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
    <?php // require ("includes/registration.php");
    ?>
<div class="topnav" id="MyTopNav">
	<a href="SiteDemo.php">home</a>
	<a href="SiteShop.php">shop</a>
	<a href="SiteAbout.php">about</a>
	<a href="SiteFAQ.php">faq</a>
	<a href="SiteContact.php">contact</a>
    <?php
    if (isset($_SESSION['name'])){
        $sessionname=$_SESSION['name'];
        echo "<a class='korzina' href='SiteShop.php?korzina=true'>$sessionname</a>" ;
    } else echo "<a href='SiteShop.php?login=in'>LOG IN</a>";
    ?>
</div></nav></header>
<?php
 require ("includes/shopbag.php");
?>
<div id="mid">
	<h1 class="midh" style="margin-bottom: -20px;">Shop</h1>
<ul class="products" style="margin:50px 0 50px 0;">

<?php
require ("includes/content-big.php");
?>
    <script type="" src="includes/script.js"></script>

</ul>
</div>
    <div class="footer" style="height:80px; margin-top:280%" >
  	<div class="container">
  		<div class="row">
  			<div class="col-4">
  				&#169Made by me in 2018
            </div>
       <div class="col-4" style="margin-left: 84%;margin-top:-30px;">
	    <p class="footer__social-icons">

		<a href="#" target="_blank" alt=""><img class="icon" src="icons/instagramm.png" ></a>

		<a href="#" target="https://vk.com/@myironcomp-hakery-lomaut-pk-cherez-memy" alt=""><img class="icon" src="icons/vk.png"></a>

		<a href="#" target="_blank" alt=""><img class="icon" src="icons/twitter.png" ></a>
         </div>
  </div>
</div>
  </div>
</body>