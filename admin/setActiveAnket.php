<?php
include_once '../settings/init.php';

if ($_GET['anket_id']) {
	updateAktifID($_GET['anket_id']);
	goToAnketList();
} else {
	goToAnketList();
}

function updateAktifID($id)
{
	global $db;
	$sql = "UPDATE aktif_anket SET aktif_id={$id}";
	$query = $db->query($sql);
}

function goToAnketList()
{
	echo '<script>window.location.href="anket-listele.php"</script>';
}
