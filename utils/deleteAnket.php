<?php 

include_once '../settings/init.php';
	if(@$_GET['anket_id']){
		$sql = "DELETE FROM anket WHERE id={$_GET['anket_id']}";
		$result = $db->query($sql);
	}
	echo '<script>window.location.href="../admin/anket-listele.php"</script>';

