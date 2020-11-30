<?php
    // membuat fungsi hitungUmur
    function hitungUmur($tgl_lahir){
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    function perkenalan($website, $salam="Assalamualaikum"){
        echo $salam. "<br>";
        echo "Selamat Datang di website ".$website."<br>";
        // memanggil fungsi lain
        echo "Sekarang website berusia ".hitungUmur(2001)." tahun<br>";
        echo "Nice to meet you :)";
    }

    // emmanggil fungsi perkenalan
    perkenalan("Mujib");