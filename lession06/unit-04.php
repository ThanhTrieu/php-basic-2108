<?php
    // khoi dong session
    session_start();

    // tao session
    // su dung bien supper global $_SESSION
    $_SESSION['myName'] = 'Nguyen Thanh Trieu';
    $_SESSION['email'] = 'test@example.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tao session</title>
</head>
<body>
    <h1>Tao session</h1>
    <a href="unit-05.php"> lay gia tri session</a>
</body>
</html>