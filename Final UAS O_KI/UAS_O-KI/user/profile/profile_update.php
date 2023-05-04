<?php

    include('../../config.php');
    $username = $_SESSION['username'];

    //get data dari form profile edit
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $type = $_POST['type'];
    // $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $fandom = $_POST['fandom'];

    //query update data ke dalam database berdasarkan username
    $query = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', type = '$type', phone = '$phone', email = '$email', address = '$address', fandom = '$fandom' WHERE username = '$username'";

    //kondisi pengecekan apakah data berhasil diupdate atau tidak
    if($update = mysqli_query($conn, $query)) {
        header("location: profile.php");
    } else {
        echo "Data Gagal Diupate!";
    }

?>