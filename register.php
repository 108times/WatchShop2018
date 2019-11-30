<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="jquery-3.3.1.min.js"></script>
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
    <div class="header___logo"><p><font style="color:#191970">Watch</font><font color="#8B0000">shop</font></p>

        <div class="header___l"><p>Best watch shop in the world!</p></div></div></header>

<nav>
    <?php require ("includes/login.php");  ?>

    <div class="topnav" id="MyTopNav">
        <a href="SiteDemo.php">home</a>
        <a href="SiteShop.php">shop</a>
        <a href="SiteAbout.php">about</a>
        <a href="SiteFAQ.php">faq</a>
        <a href="SiteContact.php">contact</a>
        <?php
        if (isset($_SESSION['auth'])){
            $sessionname=$_SESSION['name'];
            echo "<span class='korzina'>$sessionname</span>" ;
        } else echo "<a href='SiteShop.php?login=in'>LOG IN</a>";
        ?>
    </div></nav></header>
<div id="mid">
    <h1 class="midh" style="margin-bottom: -20px;">Shop</h1>
    <ul class="products" style="margin:50px 0 50px 0;">

        <?php
        require ("includes/content-big.php");
        ?>
        <?php
        echo "<div id='form1' style='display:block'>" .
            "<h1>Registration</h1>" .
            "<hr>" .
            "<form method='get'><p>Enter your name here: <input type='' name='name' id='name'></p>" .
            "<p>Password:            <input type='' name='pass' id='pas' style='margin-left: 112px;margin-right:auto;'></p>" .
            "<p>E-mail:     <input type='' name='email' id='email' style='margin-left:118px'></p>" .
            "<p>Address:    <input type='' name='adress' id='adress' style='margin-left:103px'></p>" .
            "<p style='display: none;'>Address:    <input type='' name='check'  style='margin-left:103px'></p>" .
//  "<p>Birth date:    <input type='' name='birth-date'  style='margin-left:103px' pattern='YYYY-MM-DD'></p>".
            "<p><button id='login'  class='button66'> Create Account </button></p></form>" .
            "<button class='close-button-login'>X</button></p>" .
            "<div/>";
        $db_Host = 'localhost';
        $db_User = 'root';
        $db_Password = '';
        $db_Base = 'shop';
        $con = mysqli_connect($db_Host, $db_User, $db_Password, $db_Base);
        mysqli_query($con, "SET CHARSET 'utf8'");
        /*  if (isset($_GET['name']) && isset($_GET['pass'])  && isset($_GET['email'])  && isset($_GET['adress'])  ) {
              $namein=$_GET['name'];
              $passin=$_GET['pass'];
              $emailin=$_GET['email'];
              $adressin=$_GET['adress'];
              $sql = "INSERT INTO `users` (namee,Password,Email,Adress) VALUES ('$namein','$passin','$emailin','$adressin')";  */
        if (!empty($_GET['name']) && !empty($_GET['pass']) && !empty($_GET['email']) && !empty($_GET['adress'])) {
            $namein = ($_GET['name']);
            $passin = $_GET['pass'];
            $emailin = $_GET['email'];
            $adressin = $_GET['adress'];
            $le22 = mysqli_connect($db_Host, $db_User, $db_Password, $db_Base);
            $que = mysqli_query($le22, "SELECT * FROM `users` WHERE namee = '" . $namein . "'");
            // $que = mysqli_query($n1, "SELECT * FROM `users` WHERE namee = $namein");
            $numrows = mysqli_num_rows($que);
            if ($numrows == 0) {
                //  $sql = "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ($namein, $passin, $emailin, $adressin)";
                $sql = "INSERT INTO `users` (namee,Password,Email,Adress) VALUES ('" . $namein . "','" . $passin . "','" . $emailin . "','" . $adressin . "')";
                $result = mysqli_query($le22, "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ('" . $namein . "', '" . $passin . "', '" . $emailin . "', '" . $adressin . "')");
                //   $result = mysqli_query($n1, "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ($namein, $passin, $emailin, $adressin)")
                if ($result) {
                    $message1 = "Account Successfully Created";
                    echo "<div class='notification2' style='display: block;'><h3>Account was successfully Created</h3><form><button class='close-button-ok' style='font-size:1em'>OK</button></form></div>";
                } else {
                    $message1 = "Failed to insert data information!";
                    echo "<div class='notification2' style='display: block;'><h3>Failed to insert data information!</h3><form><button class='close-button-ok' style='font-size:1em'>OK</button></form></div>";
                }
            } else {
                $message1 = "This user already exists!";
                echo "<div class='notification2' style='display: block;'><h3>This user already exists!</h3><form><button class='close-button-ok' style='font-size:1em'>OK</button></form></div>";
            }

        } else $message = "You need to fill all fields!";
        ?>
        <script src="includes/script-e.js"></script>
        <script src="includes/script.js"></script>


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