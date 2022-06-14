<?php

include 'head.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM pengguna WHERE idpengguna='$id'");

echo "<script>alert('Data Pengguna Berhasil Dihapus');</script>";
echo "<script>location='datapenggunadaftar.php';</script>";
