<?php
    // membuat fungsi yang mengembalikan nilai
    function hitungUmur($tgl_lahir){
        $umur = date ('Y') - $tgl_lahir;
        return $umur;
    }

    // memanggil fungsi dengan return
    echo "Umur saya adalah ".hitungUmur(2001);
?>