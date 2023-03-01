<?php

    require 'controller.php';

    $students = query("SELECT * FROM students");

    if ( isset($_POST["cari"] )) {
        $students = cari($_POST["keyword"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Data-Data (kenzi)</title>
</head>
<body class="bg-info">

<!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a href="input.php" tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" 
            data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                tambah data
            </a>
            </li>
        </ul>
        <form class="d-flex" role="search" action="" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
            <button class="btn btn-outline-success" type="submit" name="cari">
                Search
            </button>
        </form>
        </div>
    </div>
    </nav>

<!-- navbar end -->    <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   

<!-- table -->         <!-- table -->         <!-- table -->         <!-- table -->         <!-- table -->         <!-- table -->         <!-- table -->         

    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: auto;">
    <div class="card-body">
        <p class="card-text">

        <table border="1" cellpadding="10" class="table table-bordered">

            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Rombel</th>
                <th scope="col">Rayon</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>

            <tbody class="table-group-divider">
                <?php $i=1; ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><img src="img/<?= $student["image"];?>" width="50"></td>
                    <td><?= $student ["nama"]?></td>
                    <td><?= $student ["nis"]?></td>
                    <td><?= $student ["rombel"]?></td>
                    <td><?= $student ["rayon"]?></td>
                    <td><?= $student ["status"]?></td>
                    <td>
                    <a href="delete.php?id=<?= $student["id"]?>"onclick="return confirm('yakin bang data ingin di hapus?')">hapus</a>
                    </td>
                    <td>
                    <a href="update.php?id=<?= $student["id"]?>"onclick="return confirm('yakin bang data ingin di ubah?')">ubah</a>
                    </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
        
        </p>
    </div>
    </div>
    </div>

<!-- table end -->     <!-- table end -->     <!-- table end -->     <!-- table end -->     <!-- table end -->     <!-- table end -->     <!-- table end -->     

</body>
</html>