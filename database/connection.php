<?php

require(__DIR__ . '/connect.php');
//connecting to the database

$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

//checking connection if valid

if($conn->connect_error){
    die ("connection failed" . $conn->connect_error);
}else{

    // $query = "INSERT INTO admin(fname, lname, username, email, password) VALUES('Pauline', 'Dude', 'Pdude', 'pdude@email.cm', 'abchdhaldlksadslado')";
    // $result = $conn->query($query);


    // if($result){
    //     echo "Added Successfully";
    // }else{
    //     echo "Something went wrong";
    // }


}