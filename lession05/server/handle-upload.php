<?php

const PATH_UPLOAD = 'uploads/'; // "/" : di vao trong thu muc
//$test = 10;

function checkTypeFile($type)
{
    $arrAllowType = ['image/png','image/jpg','image/jpeg'];
    //return in_array($type,$arrAllowType); // nam trong mang tra true nguoc lai
    if(in_array($type,$arrAllowType)){
        return true;
    }
    return false;
}

function checkSizeFile($size)
{
    // $size : don vi la bytes
    // muon file khong lon hon 3M
    // 1M = ?bytes
    if($size > 3*1000000){
        return false;
    }
    return true;
}

function uploadFileToServer()
{
    // global $test;
    // quy dinh : file upload la anh : png, jpeg, jpg va anh khong lon hon 3M
    if(isset($_POST['upload'])){
        // php cung cap 1 bien supper global $_FILES de luu tru thong tin file
        // $_FILES : bien kieu mang
        // echo "<pre>";
        // print_r($_FILES);
        // die();

        if(!empty($_FILES['fileData']['tmp_name'])){
            // thuc su nguoi da chon file upload
            if($_FILES['fileData']['error'] === 0){
                // file ko co loi moi upload
                $nameFile = $_FILES['fileData']['name'];
                $tmpNameFile = $_FILES['fileData']['tmp_name'];
                $typeFile = $_FILES['fileData']['type'];
                $sizeFile = $_FILES['fileData']['size'];
                if(checkTypeFile($typeFile) && checkSizeFile($sizeFile)) {
                    // upload
                    if (move_uploaded_file($tmpNameFile, PATH_UPLOAD . $nameFile)) {
                        header("Location:../upload.php?state=ok&file=".$nameFile);
                    } else {
                        header("Location:../upload.php?state=cancel");
                    }
                } else {
                    header("Location:../upload.php?state=cancel2");
                }
            } else {
                header("Location:../upload.php?state=fail");
            }
        } else {
            header("Location:../upload.php?state=error");
        }
    }
}

uploadFileToServer();