<?php

$data = mysqli_connect("localhost", "root", "", "khairul");

function query($query) {
    global $data;
    $result = mysqli_query($data, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($tambah) {
    global $data;

    $nis = htmlspecialchars($_POST["nis"]);
    $nama = $_POST["nama"];
    $rombel = $_POST["rombel"];

    $query = "INSERT INTO dante
              VALUES
              ('', '$nis', '$nama', '$rombel')";
    mysqli_query($data, $query);

    return mysqli_affected_rows($data);
}

?>