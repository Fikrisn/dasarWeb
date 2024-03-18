<?php
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya".$nama . "<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    };

    //memanggil fungsi yang sudah dibuat
    perkenalan(" Hamdana", "Hallo");

    echo "<hr>";

    $saya = " Fikri";
    $ucapanSalam = "Selamat Pagi";

    perkenalan($saya);
?>