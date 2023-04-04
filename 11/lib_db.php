<?php

require "config.php";

function findAllKontak(){
    global $conn;
    $sql = "SELECT * FROM kontak";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $hasil = $stmt->fetchAll();
    return $hasil;
}

function findKontakById($id){
    global $conn;
    $sql = "SELECT * FROM kontak WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $hasil = $stmt->fetch();
    return $hasil;
}

function tambahKontak($nama, $no_hp, $alamat){
    global $conn;
    $sql = "INSERT INTO kontak (nama,no_hp,alamat) VALUES (:nama,:no_hp,:alamat)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':no_hp', $no_hp);
    $stmt->bindParam(':alamat', $alamat);

    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}

function hapusKontak($id){
    global $conn;
    $sql = "DELETE FROM kontak WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}

function editKontak($nama,$no_hp,$alamat,$id){
    global $conn;
    $sql = "UPDATE kontak SET nama=:nama, no_hp=:no_hp, alamat=:alamat WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':no_hp', $no_hp);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
}