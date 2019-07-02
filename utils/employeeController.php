<?php 

	include_once "../settings/init.php";

	if(@$_GET['employee_id']){
		switch ($_GET['typ']) {
			case 'edit':
			echo "1";
				updateEmployee($_GET['employee_id'],$_GET['quest']);
				break;
			case 'delete':
				deleteEmployee($_GET['employee_id']);
				break;
			case 'translate':
				translateEmployee($_GET['employee_id'],$_GET['quest']);
				break;
			default:
				returnBack();
				break;
		}
	}


	function updateEmployee($id,$data)
	{
		global $db;
		$sql = "UPDATE employee SET employee_name='{$data}' WHERE id={$id}";
		$result = $db->query($sql); //ok
		returnBack();
	}
	function deleteEmployee($id)
	{
		global $db;
		$sql = "DELETE FROM employee WHERE id={$id}";
		$result = $db->query($sql);//ok
		returnBack();
	}	
	function translateEmployee($id,$data)
	{
		global $db;
		if(chechExist($id) == 0){
			$sql = "INSERT INTO aemployee (id,employee_name) VALUES ({$id},'{$data}')";	
		}else{
			$sql = "UPDATE aemployee SET employee_name='{$data}' WHERE id={$id}";
		}
		$result = $db->query($sql);
		returnBack();
	}

	function returnBack(){
		echo '<script>window.location.href="../admin/add-employee.php"</script>';
	}

function chechExist($id){
	global $db;
	$sql = "SELECT * FROM aemployee WHERE id={$id}";
	$result = $db->query($sql);

	return sizeof($result->fetchAll());
}