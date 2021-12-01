<?php

$checkYear = function($year){
    if($year % 400 === 0){
        return true;
    }
    if($year % 4 === 0 && $year % 100 !== 0){
        return true;
    }
    return false;
};

function handleCheck()
{
    global $checkYear;
    if(isset($_POST['btnCheck'])) {
        $year = $_POST['year'] ?? null;
        if(is_numeric($year)) {
            // thuc su nhap la so
            // kiem tra xem co phai nam nhuan DL ko ?
            if($checkYear($year)){
                header('Location:../check-year.php?state=ok&y='.$year);
            } else {
                header('Location:../check-year.php?state=fail&y='.$year);
            }
        } else {
            // nhap ko phai la so
            header('Location:../check-year.php?state=error&y='.$year);
        }
    }
}
handleCheck();// goi ham ra de thuc thi chuong trinh