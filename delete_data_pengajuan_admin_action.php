<?php

	require 'koneksi.php';

	session_start();
    if (!isset($_SESSION['username_akun'])){
        header("Location: index.php");
    }

	$id = $_GET['id_data'];

	$result = mysqli_query($conn, "DELETE FROM data_pengajuan_surat WHERE id_data='$id'");

	header("location: view_data_pengajuan_admin.php?delete=success");

?>