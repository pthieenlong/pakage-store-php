<?php

function ConnectDB($conn) {
    if($conn == null) {
        return new mysqli('localhost:3306',
         'root', 
         '',
          'pakage_store');
    } else return $conn;
}
// function DisconnectDB($db_connection) {
//     if(!isset($db_connection)) return $db_connection->close();
// }




// $conn = new mysqli('localhost', 
// 'root',
//  '',
//   'pakage_store');
// if ($conn->connect_errno)
// {
//     echo("Connect failed:\n".$conn->connect_errno);
//     exit();
// } else echo "Connect success";