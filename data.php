<?php

require_once('db.php');

$query = "SELECT * FROM menu";
$sql = mysqli_query($db_connect, $query);

if ($sql) {
    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push( $result, array(
            'id_menu'=> $row['id_menu'],
            'nama'=> $row['nama'],
            'harga'=> $row['harga'],
            'deskripsi' => $row['deskripsi'],
            'gambar' => $row['gambar'],
            'lokasi' => $row['lokasi'],
        ));
    }

    echo json_encode( array('menu', $result) );
}
?>