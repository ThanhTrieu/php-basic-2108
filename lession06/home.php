<?php
    session_start();
    require "check-user.php";
    redirectLogin('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php $email = $_SESSION['emailUser'] ?? null ; ?>
    <h1> Welcome <?= $email; ?> to home page</h1>

    <!-- quay ve trang login khi logout -->
    <form action="server/logout.php" method="post">
        <button type="submit" name="btnLogout">Logout</button>
    </form>
</body>
</html>