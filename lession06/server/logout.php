<?php
session_start();
if(isset($_POST['btnLogout'])){
    // xoa session da duoc tao ra
    if (isset($_SESSION['emailUser'])) {
        unset($_SESSION['emailUser']);
    }
    // quay ve trang login
    header("Location:../login.php");
}