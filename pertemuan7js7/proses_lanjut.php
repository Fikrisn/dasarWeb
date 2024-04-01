<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];

        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }

        $selectedJenisKelamin = $_POST['jenis_kelamin'];

        echo "Anda memilih buah: " . $selectedBuah . "\n";

        if (!empty($selectedWarna)) {
            echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "\n";
        } else {
            echo "Anda tidak memilih warna favorit.\n";
        }

        echo "Jenis kelamin Anda: " . $selectedJenisKelamin . "\n";
    }
?>