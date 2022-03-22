<?php
session_start();
include_once '../Model/User.php';
unset($_SESSION['success-login']);

function login() {
    $username = isset($_POST['login-username']) ? $_POST['login-username'] : 'error';
    $password = isset($_POST['login-password']) ? $_POST['login-password'] : 'error';
    
    $user = getUserByUsername($username);
    
    if($user == null) {
        $_SESSION['success-login'] = 'invalid';
        header("location: http://localhost/pakage-store/sources/View/");
    } else {
        if(isPasswordCorrected($username, $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['success-login'] = 'success';
            header("location: http://localhost/pakage-store/sources/View/");
        } else {
            $_SESSION['success-login'] = 'wrong-password';
            header("location: http://localhost/pakage-store/sources/View/");
        }
    }
}
function logout() {
    if(isset($_SESSION['username'])) {
        header("location: http://localhost/pakage-store/sources/View/");
        unset($_SESSION['username']);
        unset($_SESSION['success-login']);
    } 
}

if(isset($_POST['login'])) login();
if(isset($_POST['logout'])) logout();