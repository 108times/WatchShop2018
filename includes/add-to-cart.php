<?php
require ("connection.php")
?>


<?php
if(isset($_SESSION['name'])) {
    $id = intval($_GET['idi']);

    if (isset($_SESSION['cart'][$id])) {

        $_SESSION['cart'][$id]['quantity']++;

    } else {
        $linkin = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        $sql_s = "SELECT * FROM goods 
                WHERE Id={$id}";
        $query_s = mysqli_query($linkin, $sql_s);
        if (mysqli_num_rows($query_s) != 0) {
            $row_s = mysqli_fetch_array($query_s);

            $_SESSION['cart'][$row_s['Id']] = array(
                "quantity" => 1,
                "price" => $row_s['Cost']
            );

            echo "<div class='notification'><h1>This item was added to your shopping cart!</h1><button class='close-button-ok'>OK</button></div>";
            var_dump($_SESSION['cart'][$row_s['Id']]);
        } else {

            $message = "This product id it's invalid!";

        }
    }
} else
    echo "<div class='notification'><h1>You need to log in before!</h1><button class='close-button-ok'>OK</button></div>";



?>