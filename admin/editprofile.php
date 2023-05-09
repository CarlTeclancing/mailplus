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
        <form method="POST" action="updateprofile.php" class="pt-4">
            <h1 class="pt-4">Updte Profile</h1>
            <div class="row mb-3 mt-3">
                <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname" value="<?php foreach ($result as $admin) : echo $admin['fname'];
                                                            endforeach ?>" class="form-control" placeholder="First name" name="fname" required aria-label="name" aria-describedby="addon-wrapping" style="width:600px; height:60px;">
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lname" value="<?php foreach ($result as $admin) : echo $admin['lname'];
                                                            endforeach ?>" class="form-control" placeholder="Last name" name="fname" required aria-label="name" aria-describedby="addon-wrapping" style="width:600px; height:60px;">
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <label for="username" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" name="username" value="<?php foreach ($result as $admin) : echo $admin['username'];
                                                                endforeach ?>" class="form-control" placeholder="user name" name="username" required aria-label="name" aria-describedby="addon-wrapping" style="width:600px; height:60px;">
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="<?php foreach ($result as $admin) : echo $admin['email'];
                                                            endforeach ?>" class="form-control" placeholder="email" name="email" required aria-label="Email" aria-describedby="addon-wrapping" style="width:600px; height:60px;">

                </div>
            </div>


            <button class="btn btn-primary mt-4">Update Profile</button>
        <?php endif ?>
        </form>

        <form method="POST" action="updateprofile.php" class="pt-4">
            <h1 class="pt-4">Reset password</h1>
            <div class="row mb-3 mt-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="floatingpassword" placeholder="Old password" name="password" required aria-label="Email" aria-describedby="addon-wrapping" style="width:600px; height:60px;">

                </div>
            </div>

            <div class="row mb-3 mt-3">
                <label for="NewPassword" class="col-sm-2 col-form-label">NewPassword</label>
                <div class="col-sm-10">
                    <input type="password" name="newPassword" class="form-control" placeholder="New password" name="password" required aria-label="Email" aria-describedby="addon-wrapping" style="width:600px; height:60px;">

                </div>
            </div>
            <button class="btn btn-primary mt-4">Update Password</button>
        </form>
</main>