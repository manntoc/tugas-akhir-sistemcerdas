<?php
    $konek = mysqli_connect("localhost", "root", "", "grafiksensor");
    $suhu = $_GET['suhu'];
    $ppm = $_GET['ppm'];

    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(suhu, ppm)VALUES('$suhu','$ppm')");

    if($simpan)
        echo "Berhasil Disimpan";
    else
        echo "Gagal Tersimpan";
?>