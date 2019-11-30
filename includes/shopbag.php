<?php
require ("includes/connection.php")
?>
<?php
require_once('includes/Mailer/class.phpmailer.php');
require_once('includes/Mailer/class.smtp.php');
require_once('includes/Mailer/class.pop3.php');
if (isset($_GET['korzina']) and $_GET['korzina']==='true') {
    echo
        "<div id='cart' style='display: block;'>" .
        "<h1 style='font-size:3em;'>Account information</h1>" .
        "<hr>" .

        "<h1 style='font-size:2em;'>Shopping cart</h1> " .
        " <div id='cart-container'>" .
        " <table > " .
        " <tr> " .
        " <th>Name</th> " .
        " <th width='1000px;'>Description</th> " .
        " <th>Price</th> " .
        " <th>Quantity</th> " .
        " <th>Total Price</th> " .
        " <th>Action</th> " .
        " </tr> " .
        " <tr> ";
    if (isset($_SESSION['cart'])) {
        $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbBase);
        $sql = "SELECT * FROM goods WHERE Id IN (";
        foreach ($_SESSION['cart'] as $id => $value) {
            $sql .= $id . ",";
        }
        $sql = substr($sql, 0, -1) . ") ORDER BY name ASC";
        $query = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($query)) {
            $name = $row['Name'];
            $name1 = (string)$name;
            $desc = $row['Description'];
            $cost = $row['Cost'];
            $ider = $_SESSION['cart'][$row['Id']];
            $quantity = $_SESSION['cart'][$row['Id']]['quantity'];
            $total = (float)$cost * (int)$quantity;
            $total1 = (string)$total;
            $ider1 = (string)$row['Id'];
            //$ider1 = (string)$ider;
            echo " <tr> " .
                " <td width='1000px;'>$name</td> " .
                " <td>$desc</td> " .
                " <td>$cost</th> " .
                " <td>$quantity</th> " .
                "<td>$total</td>" .
            //    "<td><a href='SiteShop.php?korzina=true&kupit=da&name32=$name1&cost32=$total1&ider=$ider1'>Buy</a></td>" ;
				   "<td><a href='SiteShop.php?korzina=true&kupit=da&name32=$name1&cost32=$total1&ider=$ider1'>Buy</a></td>" ;
            }
        if (isset($_GET['kupit'])) {
            $mail = new PHPMailer;
            $mail->From = "amirkadenov@gmail.com";
            $mail->FromName = "Amir Kadenov";
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'amirkadenov@gmail.com';                 // SMTP username
			$mail->Password = '06031999Aaa';                           // SMTP password
			$mail->SMTPSecure = ' 587';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port =  25 ;
            //
            $mail->addAddress("catec.cloud.test.5@gmail.com");
            $mail->addReplyTo("amirkadenov@gmail.com", "Reply");
            $nameee=$_SESSION['name'];
            $something=0;
            $idere=$_GET['ider'];
            $sql4 = "SELECT * FROM goods WHERE Id = '$idere'";
            $query = mysqli_query($link, $sql4);
            while ($row = mysqli_fetch_array($query))
            {
             $something =   $_GET['name32'];
            $someprice = $_GET['cost32'];
            }
            $mail->Body = "<i><p>Hello! Thank you for purchasing $something! Total price:$someprice!</p></i>";
            $mail->AltBody = "This is the plain text version of the email content";
            if (!$mail->send()) {
                echo "<div class='notification2' style='display: block;'><h3>Sorry.Something is wrong :(</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
            } else {
                echo "<div class='notification2' style='display: block;'><h3>Message has been sent successfully!</h3><button class='close-button-ok' style='font-size:1em'>OK</button></div>";
            }

        }


    }
    echo
        "   </table>" .
        "<button class='close-button-login'>X</button></p>" .
        "<form><input class='close-button-login-logout' name='logt' type='submit' value='Log out'></form></p>" .
        //   "<p><button class='button66' name='loginnow' style='top:30px;'>Log In</button></form ><form  action=''><button class='button665'>Register An Account At WatchShop</button></form></p>" .
        "</div></div><div style='height:100px;width:100%'> </div>";
}

if (isset($_GET['logt'])) {

    session_unset();
    session_destroy();

}


?>




