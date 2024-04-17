<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda berhasil login, silahkan menuju
        <a href = "homeSession.php"> Halaman Home </a> <?php
    } else {
        ?>
        Gagal login, silahkan login locale_get_display_language
        <a href="sessionLoginForm.html"> Halaman Login </a> <?php
        echo mysqli_error($koneksi);
    }
?>