<?php
require ("includes/connection.php");
?>
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
            "<form class='product' action=''>" .
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
partI(4);
echo "<input type='submit' class='button-buy' value='View' name='qv4'></span></form></li>" ;
partI(5);
echo "<input type='submit' class='button-buy' value='View' name='qv5'></span></form></li>" ;
partI(6);
echo "<input type='submit' class='button-buy' value='View' name='qv6'></span></form></li>" ;
partI(7);
echo "<input type='submit' class='button-buy' value='View' name='q7'></span></form></li>" ;
partI(8);
echo "<input type='submit' class='button-buy' value='View' name='qv8'></span></form></li>" ;
partI(9);
echo "<input type='submit' class='button-buy' value='View' name='qv9'></span></form></li>" ;
partI(10);
echo "<input type='submit' class='button-buy' value='View' name='qv10'></span></form></li>" ;
$AddTs=0;
function real($val)
{
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'shop';
    $link = mysqli_connect($dbHost,$dbUser, $dbPass);
    $select_db = mysqli_select_db($link,$dbName) ;
    $result100 = mysqli_query($link, "SELECT * FROM `goods` where `id` =$val");
    while ($row = mysqli_fetch_assoc($result100)) {
        $name100 = $row["Name"];
        $src100 = $row["Image"];
        $description100 = $row['Description'];
        $cost100 = $row["Cost"];
        $text100 = $row["Text"];
        $id100 = $row["Id"];
        echo
            "<div class='modal-content' >" .
            // "<form action='SiteShop.php?qv$val=View >" .
            "<div class='modal-product-name'><h1>$name100</h1></div>" .
            "<ul class='products'>".
            "<li class='modal-product-wrapper'><div class='modal-product-photo'><img src='$src100' alt=''></div></li>" .
            "<li class='modal-product-wrapper'><div class='modal-product-desc'><h2 class='modal-cost'>Cost: $cost100 $</h2><br/><a href='SiteShop.php?AddTS=Add+to+shopping+cart&idi=$val'><input type='submit' class='AddTS' value='Add to shopping bag' name='AddTS'></a></div></li>" .
            "</ul>" .
            "<button class='close-button'>X</button></form>" .
            "<div class='modal-product-text'><p>$description100</p><br/><p>$text100</p></div>" .
            "</div>";
    };
}
$loc=0;
if (isset($_GET['qv1'])) {
    $loc=1;
}
else if (isset($_GET['qv2']))  {
    $loc=2;
}
else if (isset($_GET['qv3']))  {
    $loc=3;
}
else if (isset($_GET['qv4'])) {
    $loc=4;
} else if (isset($_GET['qv5'])) {
    $loc=5;
}
else if (isset($_GET['qv6'])) {
    $loc=6;
}
else if (isset($_GET['q7'])) {
    $loc=7;
}
else  if (isset($_GET['qv8']))  {
    $loc=8;
}
else  if (isset($_GET['qv9']))  {
    $loc=9;
}
else  if (isset($_GET['qv10']) )  {
    $loc=10;
};
if ($loc!=0) {
    real($loc);
}
if (isset($_GET['AddTS'])) {
require ("includes/add-to-cart.php");
}
?>