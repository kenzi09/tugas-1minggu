<?php

require 'controller.php';

$id = $_GET["id"];
$student = query("SELECT * FROM students WHERE id = $id")[0];

if( isset($_POST["submit"]) ){
    
    if( ubahData($_POST) > 0 ){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'data.php';
        </script>
    ";

    }else{
    echo "
        <script>
            alert('data gagal diubah');
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
    <title>Update Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-warning">
<br>

    <div class="d-flex justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">Update data</h5>
                <p class="card-text">

                    <input type="hidden" name="id" id="" value="<?= $student["id"];?>">
                    <input type="hidden" name="gambarlama" id="" value="<?= $student["image"];?>">
                
                    <label for="">Nama</label>
                    <input class="form-control" type="text" placeholder="Masukan nama" aria-label="default input example"
                        type="text" name="nama" id="" value="<?= $student["nama"]?>">
                    
                
                    <label for="">Nis</label>
                    <input class="form-control" type="text" placeholder="Masukan NIS" aria-label="default input example"
                        type="text" name="nis" id="" value="<?= $student["nis"]?>">
                    
                
                    <label for="">Rombel</label> 
                    <input class="form-control" type="text" placeholder="Masukan rombel" aria-label="default input example"
                        type="text" name="rombel" id="" value="<?= $student["rombel"]?>">
                    
                
                    <label for="">Rayon</label>
                    <input class="form-control" type="text" placeholder="Masukkan rayon" aria-label="default input example" 
                        type="text" name="rayon" id="" value="<?= $student["rayon"]?>">
                    
                
                    <label for="">Status</label>
                    <input class="form-control" type="text" placeholder="Masukan status" aria-label="default input example"
                        type="text" name="status" id="" value="<?= $student["status"]?>">

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto</label><br>
                        <img src="img/<?= $student["image"]?>" alt="" style="width: 16rem;">
                        <input class="form-control" type="file" id="formFile" name="image" value="<?= $student["image"]?>">
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </p>
            </div>
            </div>
        </form>
    </div>
    
<br>
</body>
</html>