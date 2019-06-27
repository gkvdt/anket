<?php include "header.php";?>



<div class="body">
   <div class="row">

       <div class="col-md-8">
           <form action="" method="post">
               <div class="col-sm-6">
                   <select name="selectbox_survey" class="form-control show-tick">
                       <option value="">-- Select Survey --</option>
                       <?php  $query = $db->query("SELECT * FROM anket_yesorno_qu", PDO::FETCH_ASSOC);
                       if ($query->rowCount()){
                           foreach ($query as $item)

                           {?>
                               <option  value="<?= $item['anket_yesorno_questions_qq'] ?>"><?= $item['anket_yesorno_questions_qq'] ?></option>

                               <?php
                           }

                       }
                       ?>

                   </select>
               </div>

               <div class="col-md-1">
                   <button class="btn btn-primary" type="submit" value="Select Survey"  name="select_survey_btn"> Select Survey </button>
               </div>

           </form>

       </div>


       <div class="col-md-3">
           <a href="yes-or-no-survey.php" class="btn btn-success btn-lg"> Add Survey </a><br>
       </div>
   </div>
    
<div class="row clearfix">
    <div class="col-md-12">

        <table class="table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>BRANCH</th>
                <th>FULLNAME</th>
                <th>COUNTRY</th>
                <th>TEL</th>
                <th>MAİL</th>
                <th>ANSWER</th>
                <th>ANSWER WHY NOT</th>

            </tr>
            </thead>
            <tbody>
            <?php

            if (post('select_survey_btn') && post('selectbox_survey')){

                $query = $db->query("SELECT * FROM anket_yesorno", PDO::FETCH_ASSOC);
                if($query->rowCount()){
                    foreach ($query as $row)
                    { ?>
                        <tr>
                            <th scope="row"><?= $row['anket_yesorno_id']; ?></th>
                            <td><?= $row['anket_yesorno_branch']; ?></td>
                            <td><?= $row['anket_yesorno_fullname']; ?></td>
                            <td><?= $row['anket_yesorno_country']; ?></td>
                            <td><?= $row['anket_yesorno_telno']; ?></td>
                            <td><?= $row['anket_yesorno_email']; ?></td>
                            <td><?= $row['anket_yesorno_answer']; ?></td>
                            <td><?= $row['anket_yesorno_no_answer']; ?></td>
                            <td>  <a href="delete-survey-yes-or-no.php?id=<?= $row['anket_yesorno_id']; ?>" class="btn btn-danger btn-xs" name="delete">Delete Feedback</a></td>

                        </tr>


                        <?php
                    }
                }
            }




            ?>



            </tbody>
        </table>


    </div>
</div>
</div>
<?php include "footer.php";?>
