<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "Futsalku"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>