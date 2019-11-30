<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body>
<?php

session_abort();


?>
<?php
/*
//if (isset($_GET['login']) && $_GET['login']==='in' ) {
echo "<div id='form1' style='display:block'>" .
    "<h1>Registration</h1>" .
    "<hr>" .
    "<form method='get'><p>Enter your name here: <input type='' name='name' id='name'></p>" .
    "<p>Password:            <input type='' name='pass' id='pas' style='margin-left: 112px;margin-right:auto;'></p>" .
    "<p>E-mail:     <input type='' name='email' id='email' style='margin-left:118px'></p>" .
    "<p>Address:    <input type='' name='adress' id='adress' style='margin-left:103px'></p>" .
    "<p style='display: none;'>Address:    <input type='' name='check'  style='margin-left:103px'></p>" .
//  "<p>Birth date:    <input type='' name='birth-date'  style='margin-left:103px' pattern='YYYY-MM-DD'></p>".
    "<button class='close-button-login'>X</button></p>" .
    "<p><button id='login'  class='button66'> Create Account </button></p></form>" .

    "<div/>";
    // $con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbBase);
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
          $sql = "INSERT INTO `users` (namee,Password,Email,Adress) VALUES ('$namein','$passin','$emailin','$adressin')";
    if (!empty($_GET['name']) && !empty($_GET['pass']) && !empty($_GET['email']) && !empty($_GET['adress'])) {
        $namein = ($_GET['name']);
        $passin = $_GET['pass'];
        $emailin = $_GET['email'];
        $adressin = $_GET['adress'];
        $link = mysqli_connect($db_Host, $db_User, $db_Password, $db_Base);
        $que = mysqli_query($link, "SELECT * FROM `users` WHERE namee = '" . $namein . "'");
        // $que = mysqli_query($n1, "SELECT * FROM `users` WHERE namee = $namein");
        $numrows = mysqli_num_rows( $que);
        if ($numrows == 0) {
            //  $sql = "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ($namein, $passin, $emailin, $adressin)";
            $sql = "INSERT INTO `users` (namee,Password,Email,Adress) VALUES ('" . $namein . "','" . $passin . "','" . $emailin . "','" . $adressin . "')";
            $result = mysqli_query($link, "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ('" . $namein . "', '" . $passin . "', '" . $emailin . "', '" . $adressin . "')");
            //   $result = mysqli_query($n1, "INSERT INTO `users` (namee, Password, Email, Adress) VALUES ($namein, $passin, $emailin, $adressin)")
        }
        else {
            echo "<div class='notification2' style='display: block;'><h3>This user already exists!</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
        }
        if ($result) {
            $message1 = "Account Successfully Created";
            echo "<div class='notification2' style='display: block;'><h3>Account was successfully Created</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
        } else {
            $message1 = "Failed to insert data information!";
            echo "<div class='notification2' style='display: block;'><h3>Failed to insert data information!</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
        }
    } */
?>

<script src="includes/script-e.js"></script>
<script src="includes/script.js"></script>



</body>
