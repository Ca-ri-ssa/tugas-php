<?php

session_start();


function login($username,$password){
    $userdb = "carissa";
    $passdb = "111";

    if($username == $userdb && $password == $passdb){
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }
}

function sudah_login(){
    if(isset($_SESSION['username'])){
        return true;
    } else {
        return false;
    }
}