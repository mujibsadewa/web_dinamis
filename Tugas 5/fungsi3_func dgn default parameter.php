<?php
    // membuat fungsi/func dengan parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di website ".$nama."<br>";
        echo "Jangan lupa like, komen, dan share ya <br>";
        echo "<hr>";
    }

    // memanggil fungsi dengan parameter
    perkenalan("Assalamualaikum","Mujib");

    $salam = "Selamat Pagi";
    $nama = "Polines Official";
    perkenalan($salam, $nama);
?>