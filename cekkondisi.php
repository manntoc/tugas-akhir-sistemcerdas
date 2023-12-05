<?php

    $konek = mysqli_connect("localhost", "root", "", "grafiksensor");
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

    $data = mysqli_fetch_array($sql);
    $suhu = $data['suhu'];
    $ppm = $data['ppm'];

    if ($ppm == 400 && $suhu == 6) {
        echo "Kondisi Baik";
    } else {
        echo "Kondisi Buruk";
    }

?>