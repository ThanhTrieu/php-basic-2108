<?php
    // khoi dong session
    session_start();
    // lay gia tri session
    $name = $_SESSION['myName'] ?? null;
    $email = $_SESSION['email'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lay gia tri session</title>
</head>
<body>
    <h1> My name: <?= $name; ?></h1>
    <h2> Email : <?= $email; ?></h2>
    <a href="unit-04.php"> Tao moi lai session</a>
    <br/>
    <a href="unit-06.php"> xoa session</a>
</body>
</html>