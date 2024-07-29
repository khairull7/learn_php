<?php
require 'functions.php';

if(isset($_GET["submit"])){

    if(add($_GET) > 0){
        echo"<script>
        alert.('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "data gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Tambahkan Data</h2>
        <form action="" method="get">
        <input type="text" name="nis" placeholder="Masukan Nis"
        required><br><br>
        <input type="text" name="nama" placholder="Masukan 
        nama"><br><br>
        <input type="text" name="rombel" placeholder="Masukan
        rombel"><br><br>

            <button type="submit" name="submit"> Tambah</button>
    </center>
    </form>
</body>
</html>