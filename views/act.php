<?php 
include('../config/database.php');
$conn = new database();
$act = $_GET['action'];
if($act == "tambah")
{

        $nama = addslashes($_POST['nama']);
        $telp = addslashes($_POST['telp']);
        $pesan = addslashes($_POST['pesan']);
        $page = addslashes($_POST['page']);
        $conn->addbooking($nama, $telp, $pesan, $page); 
        header("location:../index.php");

}elseif($act == "del")
{
$idbook = $_GET['id'];
$conn->delbooking($idbook);
header("location:../approve.php");
}