
<?php include 'header.php';

@session_start();

if (!$_SESSION['admin']) {
    echo '<script>window.location.href="../admin/"</script>';
}
include_once "../utils/employeeHelper.php";

?>
<div class="container">

<form method="get" action="../utils/employeeController.php">
<input type="hidden" value="edit" name="typ">
<input type="hidden" value="<?php echo $_GET['employee_id']; ?>" name="employee_id">
<?php 


if (@$_GET['employee_id']) {
	getEmployee($_GET['employee_id']);
} else {
} ?>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>





   

<?php
include 'footer.php';
?>