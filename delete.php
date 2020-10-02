<?php 

include_once('config.php');

// Mengambil id dari URL untuk delete user
$id = $_GET['id'];

// Delete user dari database berdasarkan id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// Setelah dihapus pindah ke halaman index
header("Location:index.php");

 ?>