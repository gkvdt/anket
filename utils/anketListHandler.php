<?php

	include_once '../settings/init.php';

	function getAnkets()
	{
		global $db;
		$sql = 'SELECT * FROM anket';
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		if ($result->rowCount() > 0) {
			foreach ($result as $row) {
				renderAnket($row);
			}
		}
	}

	function renderAnket($anket)
	{
		$count = getAnketQuestSize($anket['id']); ?>

			<tr onclick="window.location.href = 'anket-detay.php?anket_id=<?php echo $anket['id']; ?>'" style="cursor: pointer;"> <!-- edit link and add id -->
                <?php // TODO anketleri listele?>
                <td><?php echo $anket['baslik']; ?></td>
                <td><?php echo $count; ?></td>
                <td><?php activeStatus($anket['id']); ?></td>
            </tr>
<?php
	}
	function activeStatus($anketID)
	{
		if ($anketID == aktifAnket()) {
			activeText();
		} else {
			activeButton($anketID);
		}
	}

	function activeButton($anketID)
	{
		?>
			<a class="btn btn-primary" href="setActiveAnket.php?anket_id=<?php echo $anketID; ?>">Set Active</a>		
		<?php
	}

	function activeText()
	{
		?>
			<p class="btn btn-danger"> Actived</p> 
		<?php
	}

	function getAnketQuestSize($anketID)
	{
		global $db;
		$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		return $result->rowCount();
	}
function aktifAnket()
{
	global $db;
	$sql = 'SELECT * FROM aktif_anket';
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	$id = 0;
	foreach ($result as $key) {
		$id = $key['aktif_id'];
	}

	return $id;
}
