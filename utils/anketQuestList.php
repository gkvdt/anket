
<?php
include_once '../settings/init.php';
function anketQuestList($anketID)
{
	$quests = getQuest($anketID);
	renderQuests($quests);
}

function getQuest($anketID)
{
	global $db;
	$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
	$quests = [];
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
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
function echoType($type)
{
	switch ($type) {
		case 1:
			//TODO çoklu
				echo 'Multi Quest';
			break;
		case 2:
			// TODO true or false
			echo 'Yes or No';
			break;

		case 3:
			// TODO stars
			echo 'Rate with Star';
			break;

		default:
			//
			break;
	}
}
function renderQuests($quests)
{
	?>

	<table>
	<?php foreach ($quests as $key) { ?>
		<tr>
			<td><?php echo $key['soru']; ?></td>
			<td><?php  echoType($key['tip']); ?></td>
		</tr>

	<?php } ?>
	</table>
	<?php
}
	?>
