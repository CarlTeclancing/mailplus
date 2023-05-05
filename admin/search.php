<html>
    <head>
    <title>exercise one in php</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </head>
</html>

<?php


// Validate search query
if (empty($_POST['query'])) {
  echo "Please enter a search query";
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
        echo "<div class='container'>
        <table class='table'><tr><th scope='col'>Check</th><th scope='col'>First Name</th><th scope='col'>Last Name</th><th scope='col'>Email</th><th scope='col'>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td><form action='./action/sellectbulk.php' method='POST'><input type='checkbox' name='getemail[]' value='{$row['email']}'/></td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td><a href='mail.php?id=".$row["id"]."' class='btn btn-info'>Send Email</a></td></tr>";
        }
        echo "<br> <br> <a href='index.php'><button class='btn btn-primary ' >Add users</button></a> ";
        echo "</table> <a class='btn btn-primary ' href='./action/bulkmail.php'>Buld email</a><button class='btn btn-primary m-3'>send sellected</button></form> </div>";
        
      }
    } else {
        echo 'No results found.';
    }


// Close connection
mysqli_close($conn);
?>