
<?php
//header connetion and sidebar
include('./global/header.php');
include('./global/sitebar.php');
?>


<main id='main' class='main'>
<form method="POST" action="submit.php">
                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">FN</span>
                    <input type="text" class="form-control" placeholder="First name" required name="fname" aria-label="Username" aria-describedby="addon-wrapping" width="300px">
                </div>

                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">LN</span>
                    <input type="text" class="form-control" placeholder="Last name" required name="lname" aria-label="Username" aria-describedby="addon-wrapping" width="300px">
                </div>



                <div class="input-group pt-4">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="email" class="form-control" placeholder="email" name="email" required aria-label="Email" aria-describedby="addon-wrapping" width="300px">
                </div>

                
                <button class="btn btn-primary mt-4" >submit</button>

            </form>


</main>