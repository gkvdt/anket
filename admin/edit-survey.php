<?php include "header.php";?>

<?php



if (post('submit')) {

    $id = get('id');
    $anket = post('anket_yesorno_questions_qq');


    if ($anket){
        $query = $db->prepare("UPDATE anket_yesorno_qu SET anket_yesorno_questions_qq =? WHERE anket_yesorno_no_qid=?");
        $update = $query->execute(array($anket,$id));


        if ($update){
            echo  "<div class=\"alert alert-success\"> 
                <strong>Well done!</strong> you successfully Updated Survey!.
                </div> ";

        }else{
            echo  "<div class=\"alert alert-danger\"> 
                <strong>OppS!</strong> Not Complated!.
                </div> ";
        }



    }




}
?>



    <h2>Edit  Users</h2>


    <br>
    <br>
    <br>
    <form action="" method="post">
        <div class="col-lg-4 col-md-6">
            <div class="form-group">

                <h2 class="card-inside-title">Edit Your Question</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">

                                <textarea name="anket_yesorno_questions_qq"  class="form-control no-resize" placeholder="Please type what you want...">

                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <input style="border-radius: 20px;" name="submit" type="submit" class="btn btn-warning" value="Edit user" /><br>
    </form>












<?php include "footer.php";?>