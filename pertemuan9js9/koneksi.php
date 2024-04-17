<?php
$koneksi = mysqli_connect("localhost","root","","webdb");
 if (mysqli_connect_errno()){
    echo "koneksi databse gagal :".mysqli_connect_error();
    exit();
}
?>