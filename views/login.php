<?php
    include '../config/database.php';
    $koneksi = new database;
    $idbook=$_GET['id'];
    mysqli_query($this->conn,"DELETE FROM booking WHERE idbook='$idbook'");
    header("location:approve.php?pesan=Hapus");

?>