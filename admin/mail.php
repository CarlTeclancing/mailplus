<?php 
//header connetion and sidebar
    include('./global/header.php');
    include('./global/sitebar.php');

// Database credentials
require('../database/connection.php');

// Insert data into database


    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);

    // Display data in table
    if ($result->num_rows > 0) {
      echo "  <main id='main' class='main'>";
      echo "<div class='container p-4 ps-4'>
      <table class='table'><tr><th scope='col'>Check</th><th scope='col'>First Name</th><th scope='col'>Last Name</th><th scope='col'>Email</th><th scope='col'>Action</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><td><form action='./emails.php' method='POST'><input type='checkbox' name='getemail[]' value='{$row['email']}'/></td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td><input type='submit' value='Send Email' class='btn btn-info'>";
      }
      echo "<br> <br> <a href='index.php'><button class='btn btn-primary ' >Add users</button></a> ";
      echo "</table> <a class='btn btn-primary ' href='./bulkmail.php'>Bulk email</a><button class='btn btn-primary m-3'>send sellected</button></form> </div>";
      echo '</main>';
      
    } else {
      echo "No information submitted yet";
    }
    
    $conn->close();
    ?>

