<?php
include "../connection.php"; // pastikan file ini berisi koneksi $con ke database kampus

$id = $_GET['id']; // ambil id dari parameter URL

// Jalankan query delete
$result = mysqli_query($con, "DELETE FROM matakuliah WHERE id = $id");

// Redirect kembali ke halaman daftar matakuliah
header("Location: ../admin/?page=matakuliah-show");

// Alternatif redirect (jika ingin pakai HTML meta refresh):
// echo "<meta http-equiv='refresh' content='0; url=../admin/?page=matakuliah-show'>";
?>
