<?php

$con = new mysqli('localhost:3307', 'root', '', 'main_db');

if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');

    //$this->connection=new PDO("mysql:host=localhost:3307; dbname=project","root","");
}

?>
