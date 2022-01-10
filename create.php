<?php

require_once('db.php');

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$lokasi = $_POST['lokasi'];

$query = "INSERT INTO menu (nama, harga, deskripsi, gambar, lokasi) VALUES ('$nama', '$harga', '$deskripsi', '$gambar', '$lokasi')";
$sql = mysqli_query($db_connect, $query);

if ($sql) {
    echo json_encode( array('pesan' => 'Success') );
} else {
    echo json_encode( array('pesan' => 'Fail') );
}


header('Content-Type: application/json');
?>