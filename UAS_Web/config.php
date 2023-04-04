<?php session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = '21si1';

$conn = mysqli_connect($server, $user, $pass);
if(!$conn){
    die("Database tidak terkoneksi");
}

$db = $conn->select_db($dbname);

function is_logged_in(){
    if(isset($_SESSION['username'])){
        return true;
    } else {
        return false;
    }
}