<?php

    require 'controller.php';

    

    if( isset($_POST["submit"])){


        if(tambahdata($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'data.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'data.php';
                </script>
            ";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-warning">

    <div class="position-absolute top-50 start-50 translate-middle">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">Input Data</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tolong input data dengan benar</h6>
                <p class="card-text">
                
                    <label for="">Nama</label>
                    <input class="form-control" type="text" placeholder="Masukan nama" aria-label="default input example"
                        type="text" name="nama" id="">
                    
                
                    <label for="">Nis</label>
                    <input class="form-control" type="text" placeholder="Masukan NIS" aria-label="default input example"
                        type="text" name="nis" id="">
                    
                
                    <label for="">Rombel</label> 
                    <input class="form-control" type="text" placeholder="Masukan rombel" aria-label="default input example"
                        type="text" name="rombel" id="">
                    
                
                    <label for="">Rayon</label>
                    <input class="form-control" type="text" placeholder="Masukkan rayon" aria-label="default input example" 
                        type="text" name="rayon" id="">
                    
                
                    <label for="">Status</label>
                    <input class="form-control" type="text" placeholder="Masukan status" aria-label="default input example"
                        type="text" name="status" id="">

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                    
                </p>
            </div>
            </div>
        </form>
    </div>
    
</body>
</html>