<?php include "header.php";?>


          <a href="add-user.php" class="btn btn-success">Add User</a>



                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>USERNAME</th>
                                    <th>PASSWORD</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
                                if($query->rowCount()){
                                    foreach ($query as $row)
                                    { ?>
                                        <tr>
                                    <th scope="row"><?= $row['user_id']; ?></th>
                                            <td><?= $row['user_email']; ?></td>
                                            <td><?= $row['user_password']; ?></td>
                                            <td> <a href="edit-user.php?id=<?= $row['user_id']; ?>" class="btn btn-warning btn-sm" value="edit" >Edit User</a></td>
                                            <td>  <a href="delete-user.php?id=<?= $row['user_id']; ?>" class="btn btn-danger btn-sm" name="delete">Delete User</a></td>

                                </tr>


                                   <?php
                                    }
                                }
                                ?>



                                </tbody>
                            </table>
                        </div>







                <?php include "footer.php";?>