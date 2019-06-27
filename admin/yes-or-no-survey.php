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

    <a href="edit-survey.php?id=<?= $result['anket_yesorno_no_qid']; ?>" class="btn btn-warning btn-sm" value="edit" type="submit" >Edit Survey</a>




<?php include "footer.php";?>