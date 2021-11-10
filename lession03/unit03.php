<?php
// 1 mang thong tin luu tru du lieu cua nhan vien trong cong ty
// 1 mang thong tin luu tru du lieu cua phong ban trong cong ty
// mot nhan vien thi se chi thuoc vao 1 phong ban nao do
// mot phong ban thi se co nhieu nhan vien cung lam viec
// mang thong tin ve nhan vien thi se luu nhung du lieu co ban ve nguoi nhan vien, khong luu thong tin chi tiet cua phong ban (luu ma phong ban)
// mang thong tin phong ban chi luu thong tin co ban ve phong ban do, khong luu bat ky du lieu nao cua nhan vien lam viec
// khi hien thi thong tin nhan vien can hien thi them ca thong tin ve phong ban ma nhan vien do dang lam viec ???

// a - du lieu phong ban lam viec
$rooms = [
    [
        'id' => 101,
        'name' => 'To chuc - hanh chinh',
        'leader' => 'Van A',
        'phone' => '32434343'
    ],
    [
        'id' => 102,
        'name' => 'Cong nghe thong tin',
        'leader' => 'Van B',
        'phone' => '4932434'
    ],
    [
        'id' => 103,
        'name' => 'Ke toan - tai chinh',
        'leader' => 'Thi Mo',
        'phone' => '212234'
    ]
];
// b - du lieu nhan vien lam viec trong cong ty
$staffs = [
    [
        'id' => 1,
        'room_id' => 101,
        'name' => 'Van Teo',
        'age' => 22,
        'address' => 'Ha Noi',
        'phone' => '3232234233',
        'email' => 'vanteo@gmail.com',
        'avatar' => '../public/img/nhan-vien.png'
    ],
    [
        'id' => 2,
        'room_id' => 102,
        'name' => 'Van Ty',
        'age' => 25,
        'address' => 'Ha Noi',
        'phone' => '2323434',
        'email' => 'vanty@gmail.com',
        'avatar' => '../public/img/nhan-vien.png'
    ],
    [
        'id' => 3,
        'room_id' => 103,
        'name' => 'Thi Be',
        'age' => 23,
        'address' => 'Hai Duong',
        'phone' => '9843434',
        'email' => 'thibe@gmail.com',
        'avatar' => '../public/img/nhan-vien.png'
    ],
    [
        'id' => 4,
        'room_id' => 103,
        'name' => 'Thi No',
        'age' => 24,
        'address' => 'Hai Phong',
        'phone' => '(+84) 9843434',
        'email' => 'thino@gmail.com',
        'avatar' => '../public/img/nhan-vien.png'
    ],
    [
        'id' => 5,
        'room_id' => 102,
        'name' => 'Van H',
        'age' => 23,
        'address' => 'Nam Dinh',
        'phone' => '9843434',
        'email' => 'vanH@gmail.com',
        'avatar' => '../public/img/nhan-vien.png'
    ]
];
// trong mang du lieu nhan vien - thi chi biet thong tin ma phong
// can lay them cac thong tin nhu : ten phong, ten truong phong thong qua ma phong de cho vao mang du lieu nhan vien
foreach($staffs as $k => $staff) {
    foreach($rooms as $key => $room) {
        // can kiem tra xem nhan vien thuoc cac phong ban nao ?
        if($staff['room_id'] === $room['id']){
            // biet chac chan nhan nao thuoc phong ban nao
            // can lay cac thong tu ben phong ban bo sung vao mang du lieu thong tin nhan vien tuong ung
            $staffs[$k]['room_name'] = $room['name'];
            $staffs[$k]['room_leader'] = $room['leader'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin nhan vien trong cong ty</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Thong tin nhan vien</h2>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Ma NV</th>
                            <th>Phong ban</th>
                            <th>Nhan vien</th>
                            <th>Anh nhan vien</th>
                            <th>Truong phong</th>
                            <th>Dia chi</th>
                            <th>Tuoi</th>
                            <th>Email</th>
                            <th>SDT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($staffs as $key => $item): ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['room_name']; ?></td>
                                <td><?= $item['name']; ?></td>
                                <td>
                                    <img class="img-fluid" src="<?= $item['avatar']; ?>" alt=""/>
                                </td>
                                <td><?= $item['room_leader']; ?></td>
                                <td><?= $item['address']; ?></td>
                                <td><?= $item['age']; ?></td>
                                <td><?= $item['email']; ?></td>
                                <td><?= $item['phone']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>