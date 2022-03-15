<?php
require_once '../Model/User.php';
// require_once './UserController.php';


function register() {
    $username = isset($_POST['username']) ? $_POST['username'] : 'error';
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : 'error';
    $email = isset($_POST['email']) ? $_POST['email'] : 'error';
    $password = isset($_POST['password']) ? $_POST['password'] : 'error';
    
    $user = new User($username, $fullname, $email, $password);
    addUser($user);
    
}

if(isset($_POST['register'])) 
    register();


// $user = new User($username, $fullname, $email, $password);
// addUser($user);
// addUser($newUser);

