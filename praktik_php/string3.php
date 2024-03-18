<?php
    $pesan = "Saya arek Tulungagung";
    #ubah variable pesan array dengan perintah explode
    $pesanPerKata = explode(" ", $pesan);
    #ubah setiap kata dalam array menjadi kebalikannya
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    #gabungkan kembali array menjad string
    $pesan = implode(" ", $pesanPerKata);
    
    echo $pesan."<br>";
?>