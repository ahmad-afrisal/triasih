<?php 
    session_start();
    include '../../config.php';

    $id = $_GET['provinces_id'];

    mysqli_query($config, "DELETE FROM provinces WHERE provinces_id=$id");

    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    header('location:index.php');
?>