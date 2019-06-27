<?php
include "header.php";
session_start();
unset($_SESSION['user']);
session_destroy();


?>

   <div class="row">

       <div class="col-md-4"> <h1 class="text-center text-dark">Sultan's Steak House</h1></div>
       <div class="col-md-4"> <img src="assets/sultans/logo180.png" alt=""></div>

   </div>


<div class="row">
    <div class="col-md-12">


        <div class="alert alert-success">

            <strong><h2>Well Done!</h2></strong> <h3>
                Thank you for your feedback! &nbsp;
        </div>

        
    </div>
</div>





<?php
include "footer.php";
?>