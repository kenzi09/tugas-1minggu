<?php

require 'controller.php';

$id = $_GET["id"];

if (hapusdata ($id) > 0 ){
    echo "
                <script>
                    alert('data berhasil dihapus');
                    document.location.href = 'data.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal dihapus');
                    document.location.href = 'data.php';
                </script>
            ";
        }

?>