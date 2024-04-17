<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

// Pastikan koneksi berhasil terhubung
if ($koneksi) {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $cek = mysqli_num_rows($result);

        if ($cek > 0) {
            echo "Anda berhasil login. Silakan menuju ";
            echo '<a href="homeAdmin.html">Halaman HOME</a>';
        } else {
            echo "Anda gagal login. Silakan ";
            echo '<a href="loginForm.html">Login Kembali</a>';
        }
    } else {
        echo "Terjadi kesalahan dalam menjalankan query.";
        echo mysqli_error($koneksi);
    }
} else {
    echo "Koneksi ke database gagal.";
}
?>
