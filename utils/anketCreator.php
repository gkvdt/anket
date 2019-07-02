<?php
	include_once '../settings/init.php';

	$lastInsertID;

	function createAnket($title)
	{
		global $db;
		$sql = "INSERT INTO anket (baslik) VALUES ('{$title}')";
		if ($db->query($sql)) {
			echo 'ok';

			echo '<script>window.location.href="../admin/anket-listele.php"</script>';
		} else {
			echo 'error1';
		}
	}
	function addQuest($anketID, $quest, $type, $sik)
	{
		global $lastInsertID;
		global $db;
		$sql = 'INSERT INTO anket_data(anketID,soruTip) VALUES (?,?)';
		$query = $db->prepare($sql);
		if ($query->execute([$anketID, $type])) {
			//soru olustur
			if (createQuest($anketID, $quest, $type)) {
				if (createSik($lastInsertID, $sik)) {
					echo 'error2';
				} else {
					echo 'ok';
				}
			} else {
				echo 'error3';
			}
		} else {
			echo 'error4';
		}
	}

	function createQuest($anketID, $quest, $type)
	{
		global $lastInsertID;
		global $db;
		$sql = 'INSERT INTO soru(anketID,soru,tip) VALUES (?,?,?)';
		$query = $db->prepare($sql);
		if ($query->execute([$anketID, $quest, $type])) {
			$lastInsertID = $db->lastInsertId();
			return true;
		}
		return false;
	}

	function createSik($soruID, $sik)
	{
		global $db;
		foreach ($sik as $val) {
			$sql = 'INSERT INTO sik(soruID,val) VALUES (?,?)';
			$query = $db->prepare($sql);
			if (!$query->execute([$soruID, $val])) {
				return false;
			}
		}
	}

	function explodeToArray($data)
	{
		return preg_split('/\r\n|[\r\n]/', $data);
	}
	function createYesOrNo($anketID, $quest)
	{
		$sik = ['YES', 'NO'];
		addQuest($anketID, $quest, 2, $sik);
	}

	function createMultiOption($anketID, $quest, $choice)
	{
		$sik = explodeToArray($choice);
		addQuest($anketID, $quest, 1, $sik);
	}
	function createStars($anketID, $quest)
	{
		$sik = ' ';
		addQuest($anketID, $quest, 3, $sik);
	}
	if (@$_GET['employee_name']) {
		createEmployee($_GET['employee_name']);
	}
	function createEmployee($name)
	{
		global $db;
		$sql = "INSERT INTO employee (employee_name) VALUES ('{$name}')";
		if ($db->query($sql)) {
			echo 'ok';
		} else {
			echo 'error1';
		}
		echo '<script>window.location.href="../admin/add-employee.php"</script>';
	}
	if (@$_GET['anket_title']) {
		createAnket($_GET['anket_title']);
	}

	if (@$_GET['typee']) {
		switch ($_GET['typee']) {
			case 1:
				createMultiOption($_GET['anket_id'], $_GET['quest'], $_GET['choice']);
				break;
			case 2:
				createYesOrNo($_GET['anket_id'], $_GET['quest']);
				break;
			case 3:
				createStars($_GET['anket_id'], $_GET['quest']);
				break;
			case 4:
				// TODO: here only text quest
					createTextQuest($_GET['anket_id'],$_GET['quest']);
					break ;
			case 5:
					// TODO: here select employee
					createEmployeeQuest($_GET['anket_id'],$_GET['quest'],5);
					break;

			default:
				echo 'error';
				break;
		}
	}

	function createTextQuest($anketID,$quest)
	{
		addQuest($anketID,$quest,4," ");
	}

	function createEmployeeQuest($anketID, $quest, $type)
	{
		global $db;
		$sql = 'INSERT INTO soru(anketID,soru,tip) VALUES (?,?,?)';
		$query = $db->prepare($sql);
		if ($query->execute([$anketID, $quest, $type])) {
			return true;
		}
		return false;
	}
