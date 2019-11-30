<?php
$link = mysqli_connect($dbHost,$dbUser, $dbPass);
$select_db = mysqli_select_db($link,$dbName) ;
function partI($val) {
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'shop';
    $link = mysqli_connect($dbHost,$dbUser, $dbPass);
    $select_db = mysqli_select_db($link,$dbName) ;
    $result = mysqli_query($link, "SELECT * FROM `goods` where `id` = $val");
    while ($row = mysqli_fetch_assoc($result)) {
        $name1 = $row["Name"];
        $src1 = $row["Image"];
        $description1 = $row["Description"];
        $cost1 = $row["Cost"];
        echo
            "<li class='product-wrapper'>" .
            "<form class='product' action='SiteShop.php?q$val=View'>" .
            "<div class='product-photo'>" .
            "<img src='$src1' alt=''>" .
            "</div><div class='product-name'><h2>$name1</h2></div><div class='product-desc'><p>$description1</p></div><div class='product-cost'><h1>$cost1 $</h1></div><span>" ;
    }
}
partI(1);
echo "<input type='submit' class='button-buy' value='View' name='qv1'></span></form></li>" ;
partI(2);
echo "<input type='submit' class='button-buy' value='View' name='qv2'></span></form></li>" ;
partI(3);
echo "<input type='submit' class='button-buy' value='View' name='qv3'></span></form></li>" ;
?>