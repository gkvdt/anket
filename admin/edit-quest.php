
<?php include 'header.php';

@session_start();

if (!$_SESSION['admin']) {
    echo '<script>window.location.href="../admin/anket-listele.php"</script>';
}
include_once "../utils/editQuest.php";

?>

<div class="container">

<form method="get" action="../utils/updateQuest.php">
<?php 


if (@$_GET['quest_id']) {
	renderEditor();
} else {
} ?>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>





   

<?php
include 'footer.php';
?>