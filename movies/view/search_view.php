<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem phim</title>
    <!-- moi file deu chay qua file index.php -->
    <!-- nen duong dan thi tuy chinh dua vao file index.php -->
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">
                <h5 class="text-center my-3"> Tim kiem bo phim ban yeu thich !</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nameMovie">
                    <button class="input-group-text btn btn-primary" id="btnSearch">Tim kiem</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="dataMovie"></div>
            </div>
        </div>
    </div>
    <script src="../public/js/jquery-3.6.0.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $('#btnSearch').on('click', function(){
                let self = $(this);
                let nameMovie = $('#nameMovie').val().trim();
                //alert(nameMovie);
                if(nameMovie !== ''){
                    // xu ly goi ajax
                    $.ajax({
                        url: 'index.php?c=search', // giong nhu la thuoc tinh action trong form
                        type: 'POST', // giong nhu la thuoc tinh method trong form
                        data: {movie: nameMovie}, // du lieu can gui di
                        beforeSend: function(){
                            self.text('Loading ... ');
                        },
                        success: function(response){
                            // response : du lieu dc tra ve
                            self.text('Tim kiem');
                            // hien thi ket qua
                            $('#dataMovie').html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>