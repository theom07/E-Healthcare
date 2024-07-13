<?php

    $database= new mysqli("localhost:3306","root","","demo");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>

