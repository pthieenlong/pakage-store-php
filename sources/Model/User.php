<?php
include_once '../Utils/database.php';

class User {
    private $id;
    private $role_id;
    private $username;
    private $fullname;
    private $email;
    private $phone;
    private $password;
   
    public function __construct($username, $fullname, $email, $password) {
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
    }
    
    // public function __construct($id, $username, $fullname, $email, $password, $role_id)
    // {
    //     $this->id = $id;
    //     $this->username = $username;
    //     $this->fullname = $fullname;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->role_id = $role_id;
    // }

    function setID($id) {
        $this->id = $id;
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
    function setUsername($username) {
        $this->username = $username;
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
        return $this->getUsername().', '.$this->getFullName().', '.$this->getPhone().', '.$this->getEmail().', '.$this->getPassword().', '.$this->getRoleID();
    }

}

function getAllUsers() {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("SELECT * FROM User");
    $users = [];
    if($query->execute()) {
        $user = $query->get_result();
        if($user->num_rows > 0) {
            while($res = $user->fetch_assoc()) {
                $result = new User($res['username'], $res['fullname'], $res['email'], $res['password']);
                $result->setPhone($res['phone']);
                $result->setID($res['id']);
    
                $users[] = $result;
            }
        } 
    }

    return $users;
}

function addUser($user) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);

    $query = $db_connection->prepare("INSERT INTO User VALUES (null, ?, ?, ?, ?, '', 1)");

    $query->bind_param("ssss", $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getFullName());

    $query->execute();
}

function getUserByUsername($username) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("SELECT * FROM User WHERE username = ?");
    $query->bind_param("s", $username);
    if($query->execute()) {
        $user = $query->get_result();
        if($user->num_rows > 0) {
            $user = $user->fetch_assoc();
            $result = new User($user['username'], $user['fullname'], $user['email'], $user['password']);
            $result->setPhone($user['phone']);
            $result->setRoleID($user['role_id']);
            $result->setID($user['id']);
            return $result;
        } else return null;
    } else return null;
}

function getUserByID($id) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("SELECT * FROM User WHERE id = ?");
    $query->bind_param("s", $id);
    if($query->execute()) {
        $user = $query->get_result();
        if($user->num_rows > 0) {
            $user = $user->fetch_assoc();
            $result = new User($user['username'], $user['fullname'], $user['email'], $user['password']);
            $result->setPhone($user['phone']);
            $result->setRoleID($user['role_id']);
            $result->setID($user['id']);
            return $result;
        } else return null;
    } else return null;
}

function isPasswordCorrected($username, $password) {
    $user = getUserByUsername($username);

    if($user->getPassword() === $password) {
        return true;
    } else return false;
}