<?php
require "config.php";
$username = $_POST['username'];
$password = $_POST['password'];

if(login($username,$password)){
    header('location: profil.php');
} else {
    header('location: index.php');
}