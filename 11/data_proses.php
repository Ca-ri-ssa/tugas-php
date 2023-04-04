<?php
require "lib_db.php";

$action = $_REQUEST['action'];

if($action == "simpan"){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    
    if(tambahKontak($nama, $no_hp, $alamat)){
        header('location: index.php');
    } else {
        die("gagal di tambah");
    }
    
} elseif ($action=="hapus") {
    $id = $_GET['id'];
    
    if(hapusKontak($id)){
        header('location: index.php');
    } else {
        die("gagal di hapus");
    }

} elseif($action == "edit"){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    if(editKontak($nama,$no_hp,$alamat,$id)){
        header('location: index.php');
    } else {
        die("gagal di edit");
    }
}