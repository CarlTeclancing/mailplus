<?php

//header connetion and sidebar
    include('./global/header.php');
    include('./global/sitebar.php');

// Database credentials
require('../database/connection.php');


$id = $_SESSION['id'];

$sql = "SELECT password FROM admin WHERE id = $id";

$result = $conn->query($sql);

if($result->num_rows > 0){
    foreach($result as $admin){
        echo $admin['password'];
    } 
    
}