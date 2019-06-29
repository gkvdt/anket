<?php

include_once "../settings/init.php";

	if(@$_GET){
		updateQuest($_GET['id'],$_GET['quest']);
	}

	function updateQuest($id,$quest){
		global $db;
		$sql = "UPDATE soru SET soru='{$quest}' WHERE id={$id}";
		echo $sql;
		$res = $db->query($sql);
		echo '<script>window.location.href="../admin/anket-listele.php"</script>';

	}