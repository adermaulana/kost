<?php

include 'koneksi.php';

session_start();

if(isset($_SESSION['status']) != 'login'){

    session_unset();
    session_destroy();

    echo "<script>
    alert('Login terlebih dahulu untuk pesan!');
    document.location='login.php';
         </script>";

}

?>