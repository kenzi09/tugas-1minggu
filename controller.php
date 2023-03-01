<?php

    $conn = mysqli_connect("localhost", "root", "", "db_ken2");


    function query( $query ){
        global $conn;
        $result = mysqli_query($conn, $query);
        $kotak = [];
        while ($baju = mysqli_fetch_assoc($result)){
                $kotak[] = $baju;
        }
        return $kotak;
    }

    function tambahData( $data ){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);

        $image = upload();
            if ( !$image ) {
                return false;
            }

        $query = "INSERT INTO students
                    VALUES
                ('', '$nama', '$nis', '$rombel','$rayon', '$status', '$image')
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){

        $namafile = $_FILES["image"]["name"];
        $ukuranfile = $_FILES["image"]["size"];
        $error = $_FILES["image"]["error"];
        $tmpnama = $_FILES["image"]["tmp_name"];

        if ( $error == 4 ) {
            echo "
                <script>
                    alert('tambahkan foto dulu atuh!');
                </script>";
            return false;
        }

        $ekstensiImageValid = ["jpg", "jpeg", "png", "jfif"];
        $ekstensiImage = explode(".", $namafile);
        $ekstensiImage = strtolower( end($ekstensiImage));
        if ( !in_array($ekstensiImage, $ekstensiImageValid) ) {
            echo "
                <script>
                    alert('YANG ANDA UPLOAD BUKAN FOTO!');
                </script>";
            return false;
        }

        if ( $ukuranfile > 1000000 ) {
            echo "
                <script>
                    alert('foto yang anda upload terlalu besar!');
                </script>";
            return false;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiImage;

        move_uploaded_file($tmpnama, "img/" . $namafilebaru);

        return $namafilebaru;

    }

    function hapusdata( $id ){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    } 

    function ubahData( $post ){
        global $conn;
        $id = $post["id"];  
        $nama = htmlspecialchars($post["nama"]);
        $nis = htmlspecialchars($post["nis"]);
        $rombel = htmlspecialchars($post["rombel"]);
        $rayon = htmlspecialchars($post["rayon"]);
        $status = htmlspecialchars($post["status"]);
        $gambarlama = htmlspecialchars($post["gambarlama"]);

        if ( $_FILES["image"]["error"] == 4 ) {
            $image = $gambarlama;
        }else {
            $image = upload();
        }
        

        $query = "UPDATE students SET
                  nama = '$nama',
                  nis = '$nis',
                  rombel = '$rombel',
                  rayon = '$rayon',
                  status = '$status',
                  image = '$image'
                  WHERE id =$id
                ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM students
                    WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                rombel LIKE '%$keyword%' OR
                rayon LIKE '%$keyword%' OR
                status LIKE '%$keyword%'

            ";
            return query($query);
    }
?>