<?php

include 'head.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM video WHERE idvideo='$id'");

echo "<script>alert('Data Video Berhasil Dihapus');</script>";
echo "<script>location='datavideodaftar.php';</script>";
