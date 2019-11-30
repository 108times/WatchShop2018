<?php
//session_start();
?>

<?php require_once("connection.php"); ?>
<?php
$qon="0";
if(isset($_SESSION["user-name"])){
    // вывод "Session is set"; // в целях проверки
   $message="Welcome"+" "+$username+"!";
}
if (isset($_GET['login']) and $_GET['login']==='in') {
    echo
        "<div id='form' style='display: block;'>" .
        "<h2>I Have A WatchShop Account</h2>" .
        "<hr>" .
        "<form action='' method='get'><p style='margin-top:10px'>Login: <input type='' name='login-name' ></p>" .
        "<p style='margin-top:10px'>Password:  <input style='margin-left:-10px' type='' name='login-pass' style='position: relative; left: 132px;right:auto;'></p>" .
        "<button class='close-button-login'>X</button></p>" .
        "<p><button class='button66' name='loginnow' style='top:30px;'>Log In</button></form ><form  action='register.php'><button class='button665'>Register An Account At WatchShop</button></form></p>" .
        "<div/>";
}
    if(!empty($_GET['login-name']) && !empty($_GET['login-pass'])) {
        $username = ($_GET['login-name']);
        $password = ($_GET['login-pass']);
        $n1 = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        mysqli_query($n1, "SET CHARSET 'utf8'");
        mysqli_query($n1, "SET NAMES 'utf8'");
        $query = mysqli_query($n1, "SELECT * FROM `users` WHERE `namee` = '" . $username . "' AND `Password` = '" . $password . "'");
        $numrows = mysqli_num_rows($query);
        //   var_dump($username);
        //   echo "<script>alert($numrows)</script>";
        if ($numrows != 0) {
            // старое место расположения
            $_SESSION['auth'] = 1;
            $_SESSION['name'] = $username;
            /* Перенаправление браузера */
            $message = "Welcome $username";
            echo "<div class='notification2' style='display: block;'><h3>Welcome $username</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
        } else $qon = "1";
    }


if (!empty($_GET['login-name']) && !empty($_GET['login-pass']) && ($qon === "1")){
echo "<div class='notification2' style='display: block;'><h3>Wrong login or passport!</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
}

?>