<?php
    $myArray = array();
    if(empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong";
    } else {
        echo "Array terdefinisi atau tidak kosong";
    }

    if(empty($nonExistentVar)) {
        echo "<br>Variabel tidak terdefinisi atau kosong";
    } else {
        echo "<br>Variabel terdefinisi atau tidak kosong";
    }
?>
