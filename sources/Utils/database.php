<?php

function ConnectDB($conn) {
    if($conn == null) {
        return new mysqli('localhost:3306',
         'root', 
         '',
          'pakage_store');
    } else return $conn;
}

