<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['level']== 1) {
            echo "Anda berhasil login. Silakan menuju ";?>
            <a href="homeAdmin.html">Halaman HOME</a>';
            <?Php
        } else if($row['level'] == 2) {
            echo "Anda berhasil login. Silakan menuju";?>
            <a href="homeGuest.html">Halaman GUEST</a>';
            <?Php
        }else {
        echo "Anda gagal login. silahkan";?>
        <a href="loginFrom.html">Login Kembali</a>
        <?Php
        echo mysqli_error($koneksi);
    }
?>