<?php
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');

if(isset($_POST['getemail'])){
    $emails = $_POST['getemail'];
    $emailString = implode(',', $emails);
}

?>

<main id='main' class='main'>
        <div class="container-fluid">
            <form method="POST" action="./sendsellect.php">

                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">@</span>

                    <input type="text" name="email" 
               
                    value="<?= isset($emailString) ? $emailString : ' '; ?>" 
                
                    class="form-control" placeholder="email" name="email" required aria-label="Email" aria-describedby="addon-wrapping" width="300px">

                    

                </div>

                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">MSG</span>
                    <textarea name="message" height='300px'></textarea>
                </div>

                
                <button class="btn btn-primary mt-4" >Send Email</button>

            </form>


        </div>
</main>



