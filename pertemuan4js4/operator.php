<?php 
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Penjumlahan: {$hasilTambah}<br>";
    echo "Hasil Pengurangan: {$hasilKurang}<br>";
    echo "Hasil Perkalian: {$hasilKali}<br>";
    echo "Hasil sisa bagi: {$hasilBagi}<br>";
    echo "Hasil Bagi: {$sisaBagi}<br>";
    echo "Hasil pemangkatan: {$pangkat}<br>";

    echo "<br> <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil Sama: {$hasilSama}<br>";
    echo "Hasil Tidak Sama : {$hasilTidakSama}<br>";
    echo "Hasil Lebih Kecil : {$hasilLebihKecil}<br>";
    echo "Hasil Lebih Besar : {$hasilLebihBesar}<br>";
    echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama}<br>";
    echo "Hasil Lebih Besar Sama : {$hasilLebihBesarSama}<br>";

    echo "<br> <br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil And: {$hasilAnd}<br>";
    echo "Hasil Or: {$hasilOr}<br>";
    echo "Hasil Not A: {$hasilNotA}<br>";
    echo "Hasil Not B: {$hasilNotB}<br>";

    echo "<br> <br>";

    $plusSamaDengan = $a += $b;
    $kurangSamaDengan = $a -= $b;
    $kaliSamaDengan = $a *= $b;
    $bagiSamaDengan = $a /= $b;
    $persenSamaDengan = $a %= $b;

    echo " Hasil plusSamaDengan: {$plusSamaDengan}<br>";
    echo " Hasil kurangSamaDengan: {$kurangSamaDengan}<br>";
    echo " Hasil kaliSamaDengan: {$kaliSamaDengan}<br>";
    echo " Hasil bagiSamaDengan: {$bagiSamaDengan}<br>";
    echo " Hasil persenSamaDengan: {$persenSamaDengan}<br>";

    echo "<br> <br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil Identik: {$hasilIdentik}<br>";
    echo "Hasil Tidak Identik: {$hasilTidakIdentik}<br>";

    echo "<br> <br>";

    $total_kursi = 45;
    $kursi_terisi = 28;

    $kursi_kosong = $total_kursi - $kursi_terisi;

    $persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

    echo "Persentase kursi kosong di restoran : " . number_format($persentase_kosong, 2) . "%";
?>