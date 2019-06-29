
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
			<td><?php echoType($key['tip']); ?></td>
			<td><a href="edit-quest.php?quest_id=<?php echo $key[
       'id'
   ]; ?>" class="btn btn-warning">Edit</a></td>
        <td><a href="../utils/deleteQuest.php?quest_id=<?php echo $key[
       'id'
   ]; ?>" class="btn btn-danger">Delete</a></td>
   <td><a href="translate-quest.php?quest_id=<?php echo $key[
       'id'
   ].'&anket_id='.$key['anketID']; ?>" class="btn btn-danger">Translate</a></td>
		</tr>

	<?php } ?>
	</table>
	<?php
}


?>
