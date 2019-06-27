<?php include "header.php";?>


    <h2>Edit  Users</h2>

    <form action="" method="post" name="edit_user">
        <div class="col-lg-4 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User E-Mail" name="user_email"/><br>
                <input type="text" class="form-control" placeholder="User Password" name="user_password" />
                <input style="border-radius: 20px;" name="submit" type="submit" class="btn btn-warning" value="Edit user" /><br>
            </div>
        </div>
    </form>

      <?php



       if (post('submit')){

            $id = get('id');
           $mail = post('user_email');
           $password = post('user_password');

           if ($mail){
               $query = $db->prepare("UPDATE users SET user_email =? WHERE user_id=?");
               $update = $query->execute(array($mail,$id));

               if ($update){
                   echo  "<div class=\"alert alert-success\"> 
                <strong>Well done!</strong> you successfully Updated USER!.
                </div> ";

               }else{
                   echo  "<div class=\"alert alert-danger\"> 
                <strong>OppS!</strong> you have to fill in all fields!.
                </div> ";
               }



           }

           if ($password){
               $query = $db->prepare("UPDATE users SET  user_password=? WHERE user_id=?");
               $update = $query->execute(array($password,$id));
               if ($update){
                   echo  "<div class=\"alert alert-success\"> 
                <strong>Well done!</strong> you successfully Updated PASSWORD!.
                </div> ";

               }else{
                   echo  "<div class=\"alert alert-danger\"> 
                <strong>OppS!</strong> you have to fill in all fields!.
                </div> ";
               }
           }




       }

       ?>
    <a href="users.php" class="btn btn-success"> User Setting </a>








<?php include "footer.php";?>