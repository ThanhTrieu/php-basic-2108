<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    // PHP_SESSION_NONE: hang so
    // session_status: kiem tra trang thai
}
// muc dich lam nhu vay : file nay se duoc import vao cac file khac de su dung
// trong truong hop file khac da start session len roi thi file nay khong dc start nua (trong 1 file chi dc phep goi ham session_start 1 lan)

function redirectLogin($url) {
    // $url : duong dan ve trang login
    if(!checkUserIsLogged()){
        header('Location:'.$url);
        exit();
    }
}

function redirectDefaultPage($url) {
    // $url : duong dan ve trang mac dinh mong muon
    if(checkUserIsLogged()){
        header('Location:'.$url);
        exit();
    }
}

function checkUserIsLogged() {
    $emailUser = getSessionEmailUser();
    if($emailUser === null) {
        return false;
    }
    return true;
}

function getSessionEmailUser() {
    $email = $_SESSION['emailUser'] ?? null;
    return $email;
}