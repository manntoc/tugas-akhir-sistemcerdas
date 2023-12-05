<?php

    $konek = mysqli_connect("localhost", "root", "", "grafiksensor");
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

    $data = mysqli_fetch_array($sql);
    $ppm = $data['ppm'];

    if( $ppm == "") $ppm = 0;

    echo $ppm;
?>