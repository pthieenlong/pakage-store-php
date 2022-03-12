<?php
include_once '../Utils/database.php';

// Add them create date vao nhe :D
class User {
    private $id;
    private $role_id;
    private $username;
    private $fullname;
    private $email;
    private $phone;
    private $password;

    function __construct($username, $fullname, $email, $phone, $password) {
        $this->id = getRandomIDForUser();
        $this->role_id = 1;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
    }

    function getID() {
        return $this->id;
    }
    function setRoleID($id) {
        $this->role_id = $id;
    }
    function getRoleID() {
        return $this->role_id;
    }
    function getUsername() {
        return $this->username;
    }
    function setFullName($newFullName) {
        $this->fullname = $newFullName;
    }
    function getFullName() {
        return $this->fullname;
    }
    function setEmail($newEmail) {
        $this->email = $newEmail;
    }
    function getEmail() {
        return $this->email;
    }
    function setPhone($newPhone) {
        $this->phone = $newPhone;
    } 
    function getPhone() {
        return $this->phone;
    }
    function setPassword($newPassword) {
        $this->password = $newPassword;
    }
    function getPassword() {
        return $this->password;
    }

    function __toString() {
        return $this->username.', '.$this->fullname.', '.$this->phone.', '.$this->email.', '.$this->password.'<br/>';
    }

    function getAllUser() {
        $db_connection = null;
        $db_connection = ConnectDB($db_connection);
        $query = "SELECT * FROM User";
        $users = $db_connection->query($query)->fetch_assoc();
        return $users;
    }
}