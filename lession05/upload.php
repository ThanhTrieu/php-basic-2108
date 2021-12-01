<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        const PATH_UPLOAD = 'server/uploads/';
        $state = $_GET['state'] ?? null;
        $file = $_GET['file'] ?? null; // ten file da upload
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">
                <h1 class="text-center my-3">Upload File to server</h1>
                <form class="border p-3" method="post" action="server/handle-upload.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>Moi chon file</label>
                        <input type="file" name="fileData" />
                    </div>
                    <button class="btn btn-primary" type="submit" name="upload"> Upload </button>
                </form>
                <?php if($state === 'error' || $state === 'fail'): ?>
                    <p class="text-center my-3 text-danger">Vui long kiem tra lai file truoc khi upload</p>
                <?php elseif($state === 'cancel'): ?>
                    <p class="text-center my-3 text-danger">Khong the upload duoc file - vui long thu lai sau</p>
                <?php elseif($state === 'cancel2'): ?>
                    <p class="text-center my-3 text-danger">Dinh dang file phai la anh png,jpg,jpeg va dung luong file nho hon 3Mb</p>
                <?php elseif($state === 'ok'): ?>
                    <img width="50%" src="<?= PATH_UPLOAD .$file ; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>