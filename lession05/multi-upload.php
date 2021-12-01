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
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">
                <h1 class="text-center my-3">Upload multi file to server</h1>
                <form class="border p-3" method="post" action="server/handle-multi-upload.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>Moi chon file</label>
                        <!-- multiple: nguoi chon dc nhieu file tren may tinh -->
                        <!-- fileData[]: ben phia server se nhan duoc tat ca cac file gui len (gui mang du lieu file) -->
                        <input multiple type="file" name="fileData[]" />
                    </div>
                    <button class="btn btn-primary" type="submit" name="upload"> Upload </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>