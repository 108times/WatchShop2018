<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes">
    <link rel="stylesheet" href="1.css">
</head>
<body>

<div class="header1">

    <div class="topheader">

        <span> Поиск <input type="text"></span> <?php
        session_start();
        if (isset($_SESSION['login'])){
        echo "<form class='logout' action='logout.php' method='get'>{$_SESSION['login']}<input type='submit' value='Выйти'>
        <input type='hidden' name='log' value='korzina.php'></form>";}
        else {echo "<p><a href=''>Регистрация</a> <a href='authorization.php'>Войти</a></p>";}
        session_abort();
        ?>
    </div>
    <div class="botheader">
        <div class="button">
            <a href="index.php"><img class="homebutton" src="pics/home.png"></a>
        </div>
        <div class="button">
            <a href="vsetovari.php">Все товары</a>
        </div>

        <div class="button">
            <div class="dropbtn"><a href="">Товары </a>
                <div class="dropbtn-content">
                    <a href="#">Link 2</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
        </div>

        <p  class="rightm">
            <a id="about" href="korzina.php"> Корзина </a>
            <a id="about" href="#"> Контакты </a>
            <a href="#"> Доставка </a>
            <a href="#"> О нас </a></p>
    </div></div>
</div>

</div>


<div class="bin">
    <div class="net">

            <?php
            session_start();
            include ("bd.php");
            if (isset($_SESSION['bin'])){
                echo"<br>
        <br>
        <br>
        <br>

        <table class=\"bintable\">



            <tr>
                <th class=\"thphoto\">
                    Фото
                </th>
                <th class=\"thname\">
                    Наименование товара
                </th>
                <th class=\"thart\">
                    Артикул
                </th>
                <th class=\"thcount\">
                    Количество
                </th>
                <th class=\"thcost\">
                    Стоимость
                </th>
                <th>
                </th>
            </tr>";
                foreach ($_SESSION['bin'] as $value){
                $result=mysqli_query($link,"SELECT * FROM `products` WHERE `id`='$value'");
                $myrow=mysqli_fetch_assoc($result);
                $name=$myrow["name"];
                $img=$myrow["photo"];
                $max=$myrow["count"];
                $cost=$myrow["cost"];
                echo "<tr class='bintov'>
                <td>
                    <img class='bintovar' src='$img'>
                </td>
                <td>
                $name
                </td>
                <td>
                $value
                </td>
                <td>
                    <input type='text' name='kolvo' value='1' max='$max'>
                </td>
                <td>
                $cost
                </td>
                <td class='tdelet'>
                    <form action='delet.php' method='post'><input type='hidden' name='hidd' value='$value'><input type='submit' value='X'></form>
                </td>
            </tr>";
            }}
            else{
                echo "<p class='binempty'>В Корзине ничего нет</p>";
            }

            ?>
        </table>
        <button class="subm">Заказать</button>


    </div>

</div>

</div>


<div class="footer">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="1.js" type="text/javascript"></script>

</body>
</html>