<?php
    //buat koneksi database
    $koneksi = mysqli_connect("localhost", "root", "beranda3525", "e-katalog");

    //cek koneksi database
    if(!$koneksi){
        die("Connection failed: " . mysqli_connect_error());
    }

?>