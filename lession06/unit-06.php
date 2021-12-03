<?php
    session_start();
    // xoa toan bo session tao ra
    // session_destroy();
    // xoa tung session mong muon
    if(isset($_SESSION['myName']) && isset($_SESSION['email'])){
        unset($_SESSION['myName']);
        unset($_SESSION['email']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xoa session</title>
</head>
<body>
    <h1> session da dc xoa</h1>
    <a href="unit-05.php"> lay gia tri session</a>
</body>
</html>