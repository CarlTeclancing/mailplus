<?php
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');

require(dirname(__DIR__, 1). '/database/connection.php');

$sql = ("SELECT * FROM users");
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     //looping through the data
//     // while($row = $result->fetch_assoc()) {
//     //     //hello
//     //     if($_SERVER['REQUEST_METHOD'] == 'POST'){

//     //         $email = $row['email'];
//     //         $message = $_POST['message'];
        
//     //         //SEND TO EMAIL VARIABLES
        
//     //         $toEmail = $row['email'];
//     //         $subject = "Sending email";
//     //         $message;
//     //         if(mail($toEmail, $subject, $message)){
//     //             echo "Emails succesfully sent";
//     //         } else{
//     //             echo "sorry faild to send your email! try again letter";
//     //         }
//     //     }
//     // }
// }
?>

<main id='main' class='main'>
        
            <form method="POST" action="sendsellect.php">

                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <?php if($result->num_rows > 0): ?>
                        


                    <input type="text" name="email" 
               
                    value="<?php foreach($result as $user): echo $user['email'] . ' ';  endforeach ?>" 
                
                    class="form-control" placeholder="email" name="email" aria-label="Email" aria-describedby="addon-wrapping" width="300px">

                    <?php endif ?>

                </div>

                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">MSG</span>
                    <textarea name="message" height='300px'></textarea>
                </div>

                
                <button class="btn btn-primary mt-4" >Send Email</button>

            </form>
</main>

