<?php include "header.php";
session_start();

?>

<?php
$query = $db->query("SELECT * FROM anket_yesorno_qu", PDO::FETCH_ASSOC);
$result= $query->fetch();

?>

<br>
    <div class="alert alert-info">
        <strong><h1>Your Survey Question:</h1> </strong> <h3><strong>1- <?php echo $result['anket_yesorno_questions_qq'];?></strong></h3>
    </div>
 <button class="btn btn-primary btn-sm   " type="submit" id="addquest"  onclick="questfunc()"
                     value="1"><i class="zmdi zmdi-mail-send"></i></button>
   




<?php include "footer.php";?>