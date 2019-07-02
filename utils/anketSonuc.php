<?php
	include_once '../settings/init.php';

	$size = 0;

	function anketSonucListele()
	{
		mAnketID();
		global $db;
		$sql = 'SELECT * FROM anket_sonuc';
		$result = $db->query($sql);
		$data = $result->fetchAll();
		//print_r($data);
		renderTable($data);
	}

	function renderTable($data)
	{
		renderTD();
		foreach ($data as $key) {
			?>
			<tr onclick="window.location.href = 'anket-sonuc-detay.php?anket_id=<?php echo $key['anket_yesorno_id']; ?>'" style="cursor: pointer;"> <!-- edit link and add id -->
				<td><?php echo $key['anket_yesorno_branch']; ?></td>
				<td><?php echo $key['anket_yesorno_fullname']; ?></td>
				<?php renderAnswers($key['anket_yesorno_id']);?>
				</tr>
		<?php

		
		}
	}
	function renderTD()
	{
		global $size;
		for($i = 0;$i<$size ; $i++){
			?> 
			<th> <?php echo ($i+1); ?> </th>
			<?php

		}
		?>
			</tr>
			</thead>
			<tbody>
		<?php
	}

	function renderAnswers($id){
		anketCevaplar($id);
	}



	function anketCevaplar($id)
	{
		global $db;
		$sql = "SELECT * FROM anket_sonuc_cevaplar WHERE sonucID={$id}";
		$result = $db->query($sql);
		$data = $result->fetchAll();
		renderLine($data);
	}



	function renderLine($data)
	{
		global $size;
		foreach ($data as $key) {
			?>
            	<td><b><?php echo $key['soru'].'</b>' . '<br>' ; ?>
            	<?php echoType($key); ?></td>
		<?php
		}
		$i = $size;
		while (sizeof($data)<$i) {
			$i--;
			echo '<td> - </td>';

		} 
		// while(sizeof($data)<$size){
		// }
	}

	function echoType($key)
	{
		switch ($key['tip']) {
				case 1:
					//TODO çoklu
					echo $key['cevap'];
                    break;
					// no break
				case 2:
					// TODO true or false
					$color = $key['cevap'] == 'YES'? '#30db4c' : '#ff0000';
					$x='<p style="color:'.$color.'">'. $key['cevap'] .'</p>';
					echo $x; 

					break;

				case 3:
					// TODO stars
					echo 'Voted ' . $key['cevap'] . ' Star';
					break;

				default:
					//
					echo $key['cevap'];
					break;
			}
	}



	function mAnketID(){
		global $db;
		$sql = "SELECT * FROM soru";
		$result = $db->query($sql,PDO::FETCH_ASSOC);
		foreach ($result as $key ) {
			getFromID($key['anketID']);
		}
	}

	function getFromID($id){
		global $db;

		$sql = "SELECT * FROM soru WHERE anketID={$id}";
		$result = $db->query($sql);
		$data = $result->fetchAll();
		counter(sizeof($data));
	}

	function counter($count){
		global $size;
		if($size <$count){
			$size = $count;
		}
	}

