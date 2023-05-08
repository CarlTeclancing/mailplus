
<?php
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');

// Database credentials
require('../database/connection.php');

// Insert data into database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ((!empty($_POST["fname"])) && (!empty($_POST["lname"])) && (!empty($_POST["email"]))){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (fname, lname, email) VALUES ('$fname', '$lname', '$email')";

    }
    // Do something with the data, such as save it to a database or send an email

}



if ($conn->query($sql) === TRUE) {


    echo "<main id='main' class='main'>";
    echo '<div class="alert alert-primary" role="alert">
    Information submitted successfully!
  </div> </main>';
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

