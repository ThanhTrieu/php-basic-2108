<?php
// noi se nhan du lieu dc gui len bang method GET
// php se cung cap bien supper global $_GET
// $_GET: bien kieu mang chua tat ca du lieu gui len (du lieu se duoc bieu dien thong qua key - value nhu mot mang thong thuong)
echo '<pre>';
//print_r($_GET);

$id   = $_GET['id'] ?? null; // isset($_GET['id']) ? $_GET['id'] : null;
$age  = $_GET['age'] ?? null;
$name = $_GET['name'] ?? null;

echo "id : {$id} - age: {$age} - name: {$name}";