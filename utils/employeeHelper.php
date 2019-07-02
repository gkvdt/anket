<?php
	include_once '../settings/init.php';
	function listEmployees(){
		global $db;
		$sql = "SELECT * FROM employee";
		$result = $db->query($sql);

		renderEmployee($result->fetchAll());

	}
	function renderEmployee($result){
    ?>

	<table class="table ">
	<?php foreach ($result as $key) { ?>
		<tr>
			<td style="color:#704214 !important; font-size:14px; font-weight:bold;" ><?php echo $key['employee_name']; ?></td>
			<td><a href="edit-employee.php?employee_id=<?php echo $key[
       'id'
   ]; ?>" class="btn btn-warning">Edit</a></td>
        <td><a href="../utils/employeeController.php?typ=delete&employee_id=<?php echo $key[
       'id'
   ]; ?>" class="btn btn-danger">Delete</a></td>
   <td><a href="translate-employee.php?employee_id=<?php echo $key[
       'id']
   ;?>" class="btn btn-success">Translate</a></td>
		</tr>

	<?php } ?>
	</table>
	<?php
}

	function getEmployee($id){
		global $db;
		$sql = "SELECT * FROM employee WHERE id={$id}";
		$result = $db->query($sql);
		$data = $result->fetchAll();
		renderEditableInput($data[0]);
	}

	function renderEditableInput($employee){
		?>
		<div class="col-md-4" id="option1">
				<div class="input-group p-t-10">
					<input name="quest" type="text" class="form-control" id="employee_name" value="<?php echo $employee['employee_name']; ?>">
					
				</div>
			</div>
		<?php
	}
