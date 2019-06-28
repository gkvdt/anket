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
            </tr>
<?php
	}

	function getAnketQuestSize($anketID)
	{
		global $db;
		$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		return $result->rowCount();
	}
