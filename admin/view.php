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
      <table class='table'><tr><th scope='col'>First Name</th><th scope='col'>Last Name</th><th scope='col'>Email</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td></tr>";
      }
      echo "</table> </div>";
      echo '</main>';
      
    } else {
      echo "No information submitted yet";
    }
    
    $conn->close();
    ?>

