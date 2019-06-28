<?php
include_once 'settings/init.php';

function getQuest($anketID)
{
	global $db;
	$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
	$quests = [];
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			$res = getChoice($row['id']);
			$row['choice'] = $res;
			array_push($quests, $row);
		}
	}
	return $quests;
}

function getChoice($soruID)
{
	global $db;
	$choice = [];
	$sql = "SELECT * FROM sik WHERE soruID={$soruID}";
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			array_push($choice, $row['val']);
		}
	}
	return $choice;
}
function aktifAnketID()
{
	global $db;
	$sql = 'SELECT * FROM aktif_anket ORDER BY DESC';
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			return $row['aktif_id'];
		}
	}
	return null;
}
