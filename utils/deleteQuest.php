<?php 

include_once '../settings/init.php';
	if(@$_GET['quest_id']){
		$sql = "DELETE FROM soru WHERE id={$_GET['quest_id']}";
		$result = $db->query($sql);
		$sql = "DELETE FROM asoru WHERE id={$_GET['quest_id']}";
		$result = $db->query($sql);
	}
	echo '<script>window.location.href="../admin/anket-listele.php"</script>';

