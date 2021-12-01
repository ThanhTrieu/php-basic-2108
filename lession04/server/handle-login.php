<?php
// noi day se tiep nhan du lieu gui len tu form login bang method post
// php se cung cap 1 bien supper global $_POST
// $_POST: la mot mang chua tat cac du lieu gui len bang method post
//echo "<pre>";
//print_r($_POST);

// $_REQUEST: tiep nhan cac request du lieu gui len khong quan tam bang phuong thuc nao
// chi nen su dung khi khong biet chac chan phuong thuc gui du lieu len

if(isset($_POST['btnLogin'])){
    // nguoi dung da bam button login
    $username = $_POST['user'] ?? null;
    $username = strip_tags($username); // xoa cac the html trong chuoi

    $password = $_POST['pass'] ?? null;
    $password = strip_tags($password);

    // kiem tra xem nguoi dung da nhap du lieu chua
    if(empty($username) || empty($password)){
        // chua nhap du lieu
        // quay lai dung trang login va gui data error
        // dieu huong trang
        header("Location:../login.php?state=error");
    } else {
        // da nhap du lieu
        // kiem tra xem username va password co dung ko?
        // lay du lieu tu file data.txt va so sanh username, password trong do voi username, password nguoi dung gui len
        $fileData = fopen('database/data.txt','r');
        if($fileData){
            // ket noi dc toi csdl
            $data = fread($fileData, filesize('database/data.txt'));
            fclose($fileData);
            $arrDataUser = explode('/', $data);
            if($username === $arrDataUser[0] && $password === $arrDataUser[1]){
                // dung user 
                header("Location:../home.php");
            } else {
                // dang nhap linh tinh - sai user
                header("Location:../login.php?state=fail");
            }

        } else {
            // khong ket noi toi csdl !!!!
            header("Location:../login.php?state=error_connect");
        }
    }

}