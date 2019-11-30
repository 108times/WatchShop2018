<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style2.css">
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
			<script src='jquery-3.3.1.min.js'></script>
	<title>Home</title>
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
    <?php // require ("includes/registration.php"); ?>

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
            } else echo "<a href='SiteDemo.php?login=in'>LOG IN</a>";
            ?>
</div></nav></header>
<main>
    <?php
    require ("includes/shopbag.php");
    ?>
	<div class="main_pic">
		
	<div class="main_inv"><h1 style="color:#800000">TIMELESS QUALITY</h1>
		<p>Our watches has all the features that users expect in a digital watch, and some unusual features.</p></div>
	</div>
</main>
<?php echo "<input name='login' type='submit' style='display: none;'>";?>
<div id="mid">
    <ul class="products ">
        <?php
        require ("includes/content-small.php");
        ?>
    </ul>
</div>



  <div class="footer" >
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
</html>

