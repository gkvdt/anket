<?php include "header.php";


session_start();
if (!$_SESSION['user']){
    header("location:index.php");
}



?>

                       <div class="row">
                           <div class="col-md-4">
                               <h4>Please Select a Language</h4>
                           </div>
                           <div class="col-md-2">
                               <a href="en.php"><img src="assets/sultans/en.png" alt=""></a>
                           </div>
                           <div class="col-md-2">
                               <a href="sa.php"><img src="assets/sultans/sa.png" alt=""></a>
                           </div>
                       </div>


<?php
include "footer.php";
?>