<?php

require('../../database/connection.php');

$sql = ("SELECT email FROM admin");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //looping through the data
    while($row = $result->fetch_assoc()) {
        //hello
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $message = $_POST['message'];
        
            //SEND TO EMAIL VARIABLES
        
            $toEmail = $row['email'];
            $subject = "Sending email";
            $message;
            if(mail($toEmail, $subject, $message)){
                echo "Emails succesfully sent";
            } else{
                echo "sorry faild to send your email! try again letter";
            }
        }
    }
}
