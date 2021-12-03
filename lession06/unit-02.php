<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lay gia tri cua cookie</title>
</head>
<body>
    <?php
        // lay gia tri cookie
        // php cung cap 1 bien supper global $_COOKIES luu toan bo cookie da dc tao
        // $_COOKIES : bien kieu mang - array
        $myCookie = $_COOKIE['T3H_PHP2108'] ?? null; // isset($_COOKIE['T3H_PHP2108']) ? $_COOKIE['T3H_PHP2108'] : null;
        //echo $myCookie;
    ?>
    <h1> My cookie <?= $myCookie ?></h1>
    <a href="unit-01.php"> Tao moi lai cookie</a>
    <br/>
    <a href="unit-03.php"> xoa cookie</a>
</body>
</html>

