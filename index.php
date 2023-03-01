<?php

if ( isset($_POST["submit"]) ) {
    
    if ( $_POST["user"] == "kenzi" && $_POST["pass"] == "ken" ) {
        header( "Location: data.php" );
        exit;

    }else{ 

        $error = true;

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-info">

    
    

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card bg" style="width: 30rem;">
    <div class="card-body">
        <h5 class="card-title">Hallo bang</h5>
        <h6 class="card-subtitle mb-2 text-muted">Selamat datang!</h6>
        <?php if( isset($error) ) : ?>
        <div class="d-flex justify-content-center error">
            <p class="text-danger">Username/Password yang anda masukan salah!</p>
        </div>
        <?php endif; ?>
        <p class="card-text">
        <form action="" method="post">
            <div class="mb-3 bg">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="Username" class="form-control bg" id="exampleInputEmail1" 
                aria-describedby="emailHelp" name="user" placeholder="Ketik username" autocomplete="off">
            </div>
            <div class="mb-3 bg">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control bg" id="exampleInputPassword1"
                name="pass" placeholder="Ketik password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </p>
    </div>
    </div>
</div>

</body>
</html>