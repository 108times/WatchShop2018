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
        } else echo "<a href='SiteFAQ.php?login=in'>LOG IN</a>";
        ?>
</div></nav></header>
<main>
    <?php
    require ("includes/shopbag.php");
    ?>
	<div class="about">
	<h1 class="midh" style="margin-top:-60px" >FAQ</h1>
<h2 class=midh2>My order hasn't arrived yet?</h2>
<p>While the vast majority of items do arrive on time, there are occasional postage delays, especially at this time of the year. Invariably domestic orders will turn up within a couple of days, but if after 10 working days your item hasn't arrived please email helpdesk@watchshop.com. We will begin a lost in post claim, and issue you with either a replacement or a refund immediately.</p>

	<h2 class=midh2>What are the requirements for finance? </h2>
<p>You must be a permanent UK resident and able to supply 3 years address history. Employment or retired and receive a net monthly income of at least £700. Have a good credit history and own a debit or credit card. You must have a UK bank account capable of accepting Direct Debits. The goods must be delivered to your home address and the deposit must be paid using a credit or debit card.</p>
<h2 class=midh2>Are you an official supplier of these watches? </h2>
<p>Yes. We are an official supplier for all of our watch brands. We do not obtain watches from the 'grey market' like some other internet websites. You should beware of buying from companies who are not official suppliers as they are unable to deal with the manufacturer directly and offer you the support you may need in the event of a problem, or obtain replacement parts.  There has been an explosion of internet watch websites over the past few years, and it can be difficult to determine which are official and which aren't.  With Watch Shop, you are assured that we are approved dealers of every brand listed on this website.</p>
<h2 class=midh2>When will I be refunded?</h2>
<p>99% of refunds are processed on the day that the item is returned to us, but due to the seasonal period some refunds may take slightly longer to process. The returns department will process all refunds as quickly as possible. We ask for up to 7 working days for refunds to be processed. The Returns department cannot be reached via the phone, but if after 7 days you haven't received your refund please contact us at helpdesk@watchshop.com</p></div>
</main>
  <div class="footer" style="margin-top:57%">
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