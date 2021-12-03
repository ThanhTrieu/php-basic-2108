<?php
session_start();

function loginUser() {
    if(isset($_POST['btnLogin'])){
        $email = $_POST['email'] ?? null;
        $email = strip_tags($email);

        $password = $_POST['password'] ?? null;
        $password = strip_tags($password);

        $rememberMe = $_POST['rememberMe'] ?? null;
        $rememberMe = strip_tags($rememberMe);

        if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)){
            // phai nhap email va password
            if($email === 'admin@gmail.com' && $password === '123456789'){
                
                // tao session luu thong cua user
                $_SESSION['emailUser'] = $email;

                // tao cookie
                if($rememberMe === 'on'){
                    // nguoi dung da tich chon
                    setcookie('userLogin','demoLogin', time() + 3600, "/", "", 0);
                } else {
                    // nguoi dung ko tich chon
                    setcookie('userLogin','demoLogin', time() + 300, "/", "", 0);
                }
                // di vao trang home page
                header("Location:../home.php");

            } else {
                header("Location:../login.php?state=error");
            }
        } else {
            // chua nhap du lieu
            header("Location:../login.php?state=fail");
        }
    }
}
loginUser();