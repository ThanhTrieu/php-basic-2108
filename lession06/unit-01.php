<?php
    // thiet lap cookie
    setcookie('T3H_PHP2108', 'Hoc php co ban', time() + 3600, "/", "", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set cookie</title>
</head>
<body>
    <h1> cookie da duoc tao ra</h1>
    <!-- sang ben trang unit-02.php de lay gia tri cookie ma ben unit-01 tao ra -->
    <a href="unit-02.php"> lay gia tri cookie </a>
</body>
</html>