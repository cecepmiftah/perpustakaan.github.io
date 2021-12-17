<?php

include_once ("koneksi.php");
$id = $_GET['id'];

$tanggal_sewa = date("y-m-d");

mysqli_query($koneksi, "DELETE FROM sewa WHERE id = '$id'");

header("location: index.php");