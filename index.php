<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Grafik Sensor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://unpkg.com/mdbootstrap@4.20.0/js/mdb.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $("#ceksuhu").load('ceksuhu.php');
                    $("#cekppm").load('cekppm.php');
                    $("#cekkondisi").load('cekkondisi.php');
                }, 1000);
            });
        </script>

        <div class="container" style="text-align: center;">
        <h3>Menampilkan Nilai dan Hasil Sensor</h3>

        <div style="display: flex; ">
            <!--menampilkan box nilai-->
            <div class="card text-center" style="width: 33.33%;">
            <div class="card-header" style="font-size: 20px;
            font-weight: bold; background-color:cornflowerblue; color:white">
                suhu
        </div>
        <div class="card-body">
            <h2> <span id="ceksuhu"> 0 </span> </h2>
        </div>
        </div>

            <div class="card text-center" style="width: 33.33%;">
            <div class="card-header" style="font-size: 20px;
            font-weight: bold; background-color:cornflowerblue; color:white">
                ppm
        </div>
        <div class="card-body">
            <h2> <span id="cekppm"> 0 </span> </h2>
        </div>
        </div>

            <div class="card text-center" style="width: 33.33%;">
            <div class="card-header" style="font-size: 20px;
            font-weight: bold; background-color:cornflowerblue; color:white">
            kondisi
        </div>
        <div class="card-body">
            <h2><span id="cekkondisi"> 0 </span></h2>
        </div>
        </div>
    </div>
    </div>

        <!--memanggil data grafik-->
        <script type="text/javascript">
            var refreshid = setInterval(function(){
                $('#responsecontainer').load('data.php');
            }, 5000);
        </script>
    </head>
    <body>
        <!--tempat untuk menampilkan grafik-->
        <div class="container" style="text-align: center;">
            <h3>Grapik Sensor Secara Realtime</h3>
            <p>(Data Yang Ditampilkan Adalah 5 Data Terakhir)</p>
        </div>
            <!--div untuk grafik-->
            <div class="container">
            <div class="container" id="responsecontainer" style="width: 90%; text-align:center">
        </div>
    </div>
        <!--pemanis untuk menampilkan gambar-->
        <div class="container" style="text-align: center;">
        <img src="">
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>