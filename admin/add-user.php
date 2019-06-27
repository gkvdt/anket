<?php include "header.php";?>


<h2>Add User</h2>

    <form action="" method="post" name="add_user">
        <div class="col-lg-4 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="user_email" /><br>
                <input type="text" class="form-control" placeholder="User Password" name="user_password" />
                <input style="border-radius: 20px;" name="submit" type="submit" class="btn btn-primary" value="Add user" /><br>
            </div>
        </div>
    </form>

    <?php


     if(post("submit"))
     {

         if (post("user_email") && post("user_password"))

         {
             $query = $db->prepare( "INSERT INTO users SET
            user_email = :user_email,
            user_password = :user_password
            
        ");
             $insert = $query->execute(array(
                 "user_email" => post("user_email"),
                 "user_password" => post("user_password")
             ));

             if ($insert){

                 print  "<div class=\"alert alert-success\"> 
                <strong>Well done!</strong> you successfully added USER!.
                </div> ";
             }
         }else{
             print  "<div class=\"alert alert-danger\"> 
                <strong>OppS!</strong> you have to fill in all fields!.
                </div> ";

         }



     }


    ?>
    <a href="users.php" class="btn btn-success"> User Setting </a>








<?php include "footer.php";?>