<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    echo "<br> <br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

    echo "<br> <br>";

    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }

    echo "Jumlah buah yag akan dipanen adalah: $jumlahBuah";

    echo "<br> <br>";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor";

    echo "<br> <br>";

    $nilaiSiswa = [85, 92, 78, 90, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60 ){
            echo "Nilai: $nilai (Tidak Lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }

    echo "<br> <br>";

    $daftarNilai = [85,92,78,90,75,88,79,70];
    $totalNilai = 0;
    foreach($daftarNilai as $nilai){
        $totalNilai += $nilai / 8;
    }

    echo "Daftar nilai: 85,92,78,64,90,75,88,79,70,96 <br>";
    echo "Rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai<br>";

    echo "<br>";

    $harga_produk = 120000;

    $diskon = 0.20; // 20%

    if ($harga_produk > 100000) {
        $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
    } else {
        $harga_setelah_diskon = $harga_produk;
    }

    echo "Harga setelah mendapatkan diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.');

    echo "<br> <br>";

    $skor = 650;
    echo "Total skor pemain adalah: " . $skor . "<br>";

    if ($skor > 500) {
        $hadiah_tambahan = "YA";
    } else {
        $hadiah_tambahan = "TIDAK";
    }

    echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan;
?>