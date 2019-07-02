<?php include "header.php";?>


<h2>Add User</h2>

    <form action="" method="post" name="add_user">
        <div class="col-lg-4 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="admin_username" /><br>
                <input type="text" class="form-control" placeholder="User Password" name="admin_password" />
                <input style="border-radius: 20px;" name="submit" type="submit" class="btn btn-primary" value="Add user" /><br>
            </div>
        </div>
    </form>

    <?php


     if(post("submit"))
     {

         if (post("admin_username") && post("admin_password"))

         {
             $query = $db->prepare( "INSERT INTO admins SET
            admin_username = :admin_username,
            admin_password = :admin_password
            
        ");
             $insert = $query->execute(array(
                 "admin_username" => post("admin_username"),
                 "admin_password" => post("admin_password")
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
    <a href="admins.php" class="btn btn-success"> User Setting </a>








<?php include "footer.php";?>