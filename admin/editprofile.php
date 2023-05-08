<?php
session_start();
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');

// Database credentials
require('../database/connection.php');

// Insert data into database
$id = $_SESSION['id'];

$sql = "SELECT * FROM admin WHERE id = $id";
$result = $conn->query($sql);

// // Display data in table
// if ($result) {
//   echo "  <main id='main' class='main'>";
//   while($row = $result->fetch_assoc()) {
//     echo "<form>
//     <label>First Name<input type='text' value=$row["fname"]>

//     </form>";
//   }
//   echo "</table> </div>";
//   echo '</main>';

// } else {
//   echo "No information submitted yet";
// }

// $conn->close();
// 
?>
<main id='main' class='main'>
    <?php if ($result->num_rows > 0) : ?>
        <form method="POST" action="sendmail.php">

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">FN</span>
                <input type="text" name="lname" value="<?php foreach ($result as $admin) : echo $admin['fname'];
                                                        endforeach ?>" class="form-control" placeholder="First name" name="fname" required aria-label="name" aria-describedby="addon-wrapping" width="300px">
            </div>

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">LN</span>
                <input type="text" name="lname" value="<?php foreach ($result as $admin) : echo $admin['lname'] ;
                                                        endforeach ?>" class="form-control" placeholder="Last name" name="fname" required aria-label="name" aria-describedby="addon-wrapping" width="300px">
            </div>

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">UN</span>
                <input type="text" name="username" value="<?php foreach ($result as $admin) : echo $admin['username'] ;
                                                            endforeach ?>" class="form-control" placeholder="user name" name="username" required aria-label="name" aria-describedby="addon-wrapping" width="300px">
            </div>

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="email" name="email" value="<?php foreach ($result as $admin) : echo $admin['email'] ;
                                                        endforeach ?>" class="form-control" placeholder="email" name="email" required aria-label="Email" aria-describedby="addon-wrapping" width="300px">
            </div>

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">OP</span>
                <input type="password" name="password" class="form-control" id="floatingpassword" placeholder="Old password" name="password" required aria-label="Email" aria-describedby="addon-wrapping" width="300px">
            </div>

            <div class="input-group pt-4">
                <span class="input-group-text" id="addon-wrapping">NP</span>
                <input type="password" name="password" class="form-control" placeholder="New password" name="password" required aria-label="Email" aria-describedby="addon-wrapping" width="300px">
            </div>
            <button class="btn btn-primary mt-4">Update Profile</button>
        <?php endif ?>
        </form>
</main>