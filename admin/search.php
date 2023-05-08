<?php
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');

// Validate search query
if (empty($_POST['query'])) {
  echo "Please enter a search Term";
  exit;
}

// Connect to database
require('../database/connection.php');

// Prepare SQL statement


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get search query from form
    $search_query = $_POST['query'];
    
    // Search query in database
    $sql = "SELECT * FROM users WHERE email LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    // Display results in table
    if ($result) {
        echo "<main id='main' class='main'>";
        echo "<div class='container'>
        <table class='table'><tr><th scope='col'>Check</th><th scope='col'>First Name</th><th scope='col'>Last Name</th><th scope='col'>Email</th><th scope='col'>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td><form action='./emails.php' method='POST'><input type='checkbox' name='getemail[]' value='{$row['email']}'/></td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td><input type='submit' value='Send Email' class='btn btn-info'>";
        }
        echo "<br> <br> ";
        echo "</table> <a class='btn btn-primary ' href='./bulkmail.php'>Bulk email</a><button class='btn btn-primary m-3'>send sellected</button></form> </div>";
        echo '</main>';
        
      }
    } else {
        echo 'No results found.';
    }


// Close connection
mysqli_close($conn);
?>