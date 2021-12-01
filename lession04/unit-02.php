<?php
// mot so ham tien ich xu ly ve files
$pathFile = '../public/data/mysql.txt';

// 1 - kiem tra xem file co ton tai hay ko?
if(file_exists($pathFile)){
    echo "OK";
} else {
    echo "ERROR";
}
echo "<br/>";

// 2 - kiem tra xem file co dc cap quyen ghi du lieu ?
if(is_writeable($pathFile)){
    echo "YES";
} else {
    echo "NO";
}
echo "<br/>";

// 3 - chen noi dung vao file (ghi de len noi dung cu cua file)
// file_put_contents($pathFile, 'Dang hoc php co ban');

// 4 - doi ten file
$newPathFile = "../public/data/note.txt";
//rename($newPathFile, $pathFile);

// copy file
// copy($pathFile, '../public/data/note.txt');

// 5 xoa file
if(file_exists($newPathFile)){
    // xoa file
    unlink($newPathFile);
}

//6 - kiem tra thu muc va tao thu muc
if(!is_dir('../public/base')){ // khong ton tai thu muc
    mkdir('../public/base');
}