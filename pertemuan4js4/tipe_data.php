<?php 
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    echo "Variable a: {$a} <br>";
    echo "Variable b: {$b} <br>";
    echo "Variable c: {$c} <br>";
    echo "Variable d: {$d} <br>";
    echo "Variable e: {$e} <br>";

    var_dump($e);
    echo "<br>";
    echo "<br>";

    $nilaiMatematika = 5.1;
    $nilaiIpa = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    $rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia) / 3;

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIpa} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    var_dump($rataRata);
    echo "<br>";
    echo "<br>";

    $apakahSiswaLlulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLlulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);

    echo "<br> <br>";

    $namaDepan ="Ibnu";
    $namaBelakang ='Jakaria';

    $namaLengkap = "{$namaDepan} {$namaBelakang}";
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    echo "Nama Depan : {$namaDepan} <br> ";
    echo 'Nama Belakang : ' . $namaBelakang . '<br>';

    echo $namaLengkap;

    echo "<br> <br>";

    $listMahasiswa = ["Fikri Setiawan", "Nuril Wahid", "Lendis Fabri"];
    echo $listMahasiswa[0];
?>