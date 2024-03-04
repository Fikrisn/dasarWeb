<?php 
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";
    $benar =  true;
    $salah = false;
    echo "Variable benar: $benar, Variable salah: $salah";

    //mendefinisikan konstanta untuk nilai tetap
    define("Nama_Situs","Website.com");
    define("Tahun_Pendirian", 2023);

    echo "Selamat Datang di". Nama_Situs .",situs yang didirikan pada tahun ". Tahun_Pendirian .".";
    ?>