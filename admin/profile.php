<?php 

//header connetion and sidebar
    include('./global/header.php');
    include('./global/sitebar.php');

// Database credentials
require('../database/connection.php');

// Insert data into database
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM admin WHERE id = $id";
    $result = $conn->query($sql);

    // Display data in table
    if ($result) {
      echo "  <main id='main' class='main'>";
      echo "<div class='container p-4 ps-4'>
      <table class='table'><tr><th scope='col'>First Name</th><th scope='col'>Last Name</th><th scope='col'>Email</th><th>Edit</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td><strong><a href='./editprofile.php'>Edit</a></strong><td></tr>";
      }
      echo "</table> </div>";
      echo '</main>';
      
    } else {
      echo "No information submitted yet";
    }
    
    $conn->close();
    ?>
