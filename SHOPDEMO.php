<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <title>MYSITE</title>
</head>
<body>



<header>
    <div class="header___logo"><p><font style="color:#191970">Watch</font><font color="#8B0000">shop</font></p>
        <div class="header___l"><p>Best watch shop in the world!</p></div></div></header>
<nav>
    <div class="topnav" id="MyTopNav">
        <a href="SiteDemo.html">home</a>
        <a href="SiteShop.html">shop</a>
        <a href="SiteAbout.html">about</a>
        <a href="SiteFAQ.html">faq</a>
        <a href="SiteContact.html">contact</a>
        <a href="">card</a>
    </div></nav></header>
<div id="mid">
    <h1 class="midh" style="margin-bottom: -20px;">Shop</h1>
    <ul class="products" style="margin:50px 0 50px 0;">

        <?php
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'shop';
        $link = mysqli_connect($dbHost,$dbUser, $dbPass);
        //$select_db = mysqli_select_db($link,$dbName) ;
        //function create($val) {
        //    $result = mysqli_query($link, "SELECT * FROM `goods` where `id` = $val");
        //    while ($row = mysqli_fetch_assoc($result)) {
        //        $name1 = $row["Name"];
        //        $src1 = $row["Image"];
        //        $description1 = $row["Description"];
        //        $cost1 = $row["Cost"];
        //        echo
        //            "<li class='product-wrapper'>" .
        //            "<form class='product' action='SiteShop.php'>" .
        //            "<div class='product-photo'>" .
        //            "<img src='$src1' alt=''>" .
        //            "</div><div class='product-name'><h3>$name1</h3></div><div class='product-desc'><p>$description1</p></div><div class='product-cost'><h3 >$cost1</h3></div><span><input type='submit' class='button-buy' value='View' name='$qv'></span></form></li>" ;
        //    }
        //
        //}
        //
        //for ($index=1;$index<11;$index++) {
        //create($index);
        //}

        ?>
        <?php $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'shop';
        $link = mysqli_connect($dbHost,$dbUser, $dbPass);
        $select_db = mysqli_select_db($link,$dbName) ;
        ?>
        <?php
        $result1 = mysqli_query($link, "SELECT * FROM `goods` where `id` =1");
        while ($row = mysqli_fetch_assoc($result1)) {
            $name1 = $row["Name"];
            $src1 = $row["Image"];
            $description1 = $row["Description"];
            $cost1 = $row["Cost"];
            echo
                "<li class='product-wrapper''>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src1' alt=''>" .
                "</div><h2>$name1</h2><p>$description1</p><h2 >$cost1</h2><span><input type='submit' class='button-buy' value='View' name='q1'></span></form></li>" ;
        }
        ?>
        <?php

        $result2 = mysqli_query($link, "SELECT * FROM `goods` where `id` =2");
        while ($row = mysqli_fetch_assoc($result2)) {
            $name2 = $row["Name"];
            $src2 = $row["Image"];
            $description2= $row["Description"];
            $cost2 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src2' alt=''>" .
                "</div><h2>$name2</h2><p>$description2</p><h2 >$cost2</h2><span><input type='submit' class='button-buy' value='View' name='q2'></span></form</li>" ;
        }
        ?>
        <?php /**/ ?>

        <?php

        $result3 = mysqli_query($link, "SELECT * FROM `goods` where `id` =3");
        while ($row = mysqli_fetch_assoc($result3)) {
            $name3 = $row["Name"];
            $src3 = $row["Image"];
            $description3 = $row["Description"];
            $cost3 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src3' alt=''>" .
                "</div><h2>$name3</h2><p>$description3</p><h2 >$cost3</h2><span><input type='submit' class='button-buy' value='View' name='q3'></span></form</li>" ;
        }
        ?>

        <?php

        $result4 = mysqli_query($link, "SELECT * FROM `goods` where `id` =4");
        while ($row = mysqli_fetch_assoc($result4)) {
            $name4 = $row["Name"];
            $src4 = $row["Image"];
            $description4 = $row["Description"];
            $cost4 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src4' alt=''>" .
                "</div><h2>$name4</h2><p>$description4</p><h2 >$cost4</h2><span><input type='submit' class='button-buy' value='View' name='q4'></span></form</li>" ;
        }
        ?>


        <?php

        $result5 = mysqli_query($link, "SELECT * FROM `goods` where `id` =5");
        while ($row = mysqli_fetch_assoc($result5)) {
            $name5 = $row["Name"];
            $src5 = $row["Image"];
            $description5 = $row["Description"];
            $cost5 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src5' alt=''>" .
                "</div><h2>$name5</h2><p>$description5</p><h2 >$cost5</h2><span><input type='submit' class='button-buy' value='View' name='q5'></span></form</li>" ;
        }
        ?>


        <?php

        $result6 = mysqli_query($link, "SELECT * FROM `goods` where `id` =6");
        while ($row = mysqli_fetch_assoc($result6)) {
            $name6 = $row["Name"];
            $src6 = $row["Image"];
            $description6 = $row["Description"];
            $cost6 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src6' alt=''>" .
                "</div><h2>$name6</h2><p>$description6</p><h2 >$cost6</h2><span><input type='submit' class='button-buy' value='View' name='q6'></span></form</li>" ;
        }
        ?>



        <?php

        $result7 = mysqli_query($link, "SELECT * FROM `goods` where `id` =7");
        while ($row = mysqli_fetch_assoc($result7)) {
            $name7 = $row["Name"];
            $src7 = $row["Image"];
            $description7 = $row["Description"];
            $cost7 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src7' alt=''>" .
                "</div><h2>$name7</h2><p>$description7</p><h2 >$cost7</h2><span><input type='submit' class='button-buy' value='View' name='q7'></span></form</li>" ;
        }
        ?>



        <?php

        $result8 = mysqli_query($link, "SELECT * FROM `goods` where `id` =89");
        while ($row = mysqli_fetch_assoc($result8)) {
            $name8 = $row["Name"];
            $src8 = $row["Image"];
            $description8 = $row["Description"];
            $cost8 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src8' alt=''>" .
                "</div><h2>$name8</h2><p>$description8</p><h2 >$cost8</h2><span><input type='submit' class='button-buy' value='View' name='q8'></span></form</li>" ;
        }
        ?>





        <?php

        $result9 = mysqli_query($link, "SELECT * FROM `goods` where `id` =9");
        while ($row = mysqli_fetch_assoc($result9)) {
            $name9 = $row["Name"];
            $src9 = $row["Image"];
            $description9 = $row["Description"];
            $cost9 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src9' alt=''>" .
                "</div><h2>$name9</h2><p>$description9</p><h2 >$cost9</h2><span><input type='submit' class='button-buy' value='View' name='q9'></span></form</li>" ;
        }
        ?>10




        <?php

        $result10 = mysqli_query($link, "SELECT * FROM `goods` where `id` =10");
        while ($row = mysqli_fetch_assoc($result10)) {
            $name10 = $row["Name"];
            $src10 = $row["Image"];
            $description10 = $row["Description"];
            $cost10 = $row["Cost"];
            echo
                "<li class='product-wrapper'>" .
                "<form class='product' action='SiteShop.php'>" .
                "<div class='product-photo'>" .
                "<img src='$src10' alt=''>" .
                "</div><h2>$name10</h2><p>$description10</p><h2 >$cost10</h2><span><input type='submit' class='button-buy' value='View' name='q10'></span></form</li>" ;
        }
        ?>


        <?php
        /*function real($val)
         {
             $link = mysqli_connect($dbHost, $dbUser, $dbPass);
             $result100 = mysqli_query($link, "SELECT * FROM `goods` where `id` =$val");
             while ($row = mysqli_fetch_assoc($result100)) {
                 $name100 = $row["Name"];
                 $src100 = $row["Image"];
                 $description100 = $row['Description'];
                 $cost100 = $row["Cost"];
                 $text100 = $row["Text"];
                 echo
                     "<form class='con-tent' >" .
                     "<div class='product-photo'>" .
                     "<img src='$src100' alt=''>" .
                     "</div> <h2>$name100</h2> <p>$description100</p> <p>$text100</p> <h2 >$cost100</h2>" .
                     "<span><input type='submit' class='button-buy' value='View' name=''></span>" .
                     "</form>";
             };
         }
         if (isset($_GET('q1')) && ($_GET('q1')=== true)) {
         $loc=1;
         real($loc);
         }
         else
         if (isset($_GET('q2')) && ($_GET('q2')=== true)) {
             $loc=2;
              real($loc);
         }
         else if (isset($_GET('q3')) && ($_GET('q3')=== true)) {
             $loc=3;
              real($loc);
         }
         else  if (isset($_GET('q4')) && ($_GET('q4')=== true)) {
             $loc=4;
              real($loc);
         }
         else  if (isset($_GET('q5')) && ($_GET('q5')=== true)) {
             $loc=5;
              real($loc);
         }
         else if (isset($_GET('q6')) && ($_GET('q6')=== true)) {
             $loc=6;
              real($loc);
         }
         else  if (isset($_GET('q7')) && ($_GET('q7')=== true)) {
             $loc=7;
             real($loc);
         }
         else  if (isset($_GET('q8')) && ($_GET('q8')=== true)) {
             $loc=8;
             real($loc);
         }
         else   if (isset($_GET('q9')) && ($_GET('q9')=== true)) {
             $loc=9;
             real($loc);
         }
         else   if (isset($_GET('q10')) && ($_GET('q10')=== true)) {
             $loc=10;
             real($loc);
         };*/
        ?>


    </ul>
</div>
<div class="footer" style="margin-top:57%">
    <div class="container">
        <div class="row">
            <div class="col-4">
                &#169Made by me in 2018
            </div>
            <div class="col-4" style="margin-left: 84%;margin-top:-30px;">
                <p class="footer__social-icons">

                    <a href="#" target="_blank" alt=""><img class="icon" src="icons/instagramm.png" ></a>

                    <a href="#" target="_blank" alt=""><img class="icon" src="icons/vk.png"></a>

                    <a href="#" target="_blank" alt=""><img class="icon" src="icons/twitter.png" ></a>
            </div>
        </div>
    </div>
</div>
</body>