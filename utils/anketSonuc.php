<?php
	include_once '../settings/init.php';

	function anketSonucListele()
	{
		global $db;
		$sql = 'SELECT * FROM anket_sonuc';
		$result = $db->query($sql);
		$data = $result->fetchAll();
		//print_r($data);
		renderTable($data);
	}

	function renderTable($data)
	{
		foreach ($data as $key) {
			?>
			<tr onclick="window.location.href = 'anket-sonuc-detay.php?anket_id=<?php echo $key['anket_yesorno_id']; ?>'" style="cursor: pointer;"> <!-- edit link and add id -->
                                    <td><?php echo $key['anket_yesorno_branch']; ?></td>
                                    <td><?php echo $key['anket_yesorno_fullname']; ?></td>
                                    <td><?php echo $key['anket_yesorno_country']; ?></td>
                                    <td><?php echo $key['anket_yesorno_telno']; ?></td>
                                    <td><?php echo $key['anket_yesorno_email']; ?></td>
                                   
									</tr>
		<?php
		}
	}
