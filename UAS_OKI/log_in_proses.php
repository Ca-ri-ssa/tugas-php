<?php

include "config.php";
$username = $_POST['username'];
$password = strip_tags($_POST['password']);
$password = sha1($password);
// $type = $_POST['type'];

$data = mysqli_query($conn, "SELECT type FROM user WHERE username = '$username'");
$data2 = mysqli_fetch_assoc($data);
$type = $data2['type'];


if(isset($username) && isset($password) && !empty($username) && !empty($password))
{
    $sql = mysqli_query($conn, "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'");

    $num_rows = mysqli_num_rows($sql);
    
    if($num_rows > 0){
        $gid = mysqli_query($conn, "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'");
        $row = mysqli_fetch_assoc($gid);
        $uid = $row['username'];

        //$_SESSION['username'] = $uid;

        if($type == 'user'){
            $_SESSION['username'] = $uid;
            header('Location: user/home/homepage.php');
        }

        else if($type == 'admin'){
            $_SESSION['username'] = $uid;
            header('Location: admin/home/homepage.php');
        }

        else{
            echo "<script>alert('Log in is Invalid'); window.location='index.php';</script>";
        }

        //header('Location: user/home/homepage.php');
    }

    else
    {
        echo "<script>alert('Log in is Invalid'); window.location='index.php';</script>";
    }
} 

else {
    echo "<script>alert('Log in is Invalid'); window.location='index.php';</script>";
}
?>