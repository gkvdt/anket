<?php
	include_once '../settings/init.php';

	function anketSonucListele()
	{
		global $db;
		$sql = "SELECT * FROM anket_sonuc_cevaplar WHERE sonucID={$_GET['anket_id']}";
		$result = $db->query($sql);
		$data = $result->fetchAll();
		//print_r($data);
		renderTable($data);
	}

	function renderTable($data)
	{
		foreach ($data as $key) {
			?>
			<tr> <!-- edit link and add id -->
            	<td><?php echo $key['soru']; ?></td>
            	<td><?php echoType($key); ?></td>
            	<td><?php renderYesOrNoQuest($key) ?></td>
			</tr>
		<?php
		}
	}

	function echoType($key)
	{
		switch ($key['tip']) {
				case 1:
					//TODO çoklu
					echo $key['cevap'];

					// no break
				case 2:
					// TODO true or false
					echo $key['cevap'];
					break;

				case 3:
					// TODO stars
					echo 'Voted ' . $key['cevap'] . ' Star';
					break;

				default:
					//
					break;
			}
	}

	function renderYesOrNoQuest($key)
	{
		if ($key['cevap'] == 'NO') {
			echo 'Description: ' . $key['aciklama'];
		}
	}
