<?php
include_once '../settings/init.php';
	if(@$_GET){
		$id = insertUserData($_GET);
		for($i=0;$i<$_GET['size'];$i++){
			//TODO add null parameter all form item
			insertChoises($id,$_GET,$i);
            echo '<script>window.location.href="../logout.php"</script>';
		}
	}
	function insertUserData($data){
	global $db;

		$query = $db->prepare('INSERT INTO anket_sonuc SET anket_yesorno_branch = :anket_yesorno_branch,
                anket_yesorno_fullname = :anket_yesorno_fullname, anket_yesorno_country = :anket_yesorno_country,
                anket_yesorno_telno = :anket_yesorno_telno, anket_yesorno_email = :anket_yesorno_email
        ');

		$insert = $query->execute([
			'anket_yesorno_branch' => $data['anket_yesorno_branch'],
			'anket_yesorno_fullname' => $data['anket_yesorno_fullname'],
			'anket_yesorno_country' => $data['anket_yesorno_country'],
			'anket_yesorno_telno' => $data['anket_yesorno_telno'],
			'anket_yesorno_email' => $data['anket_yesorno_email']
		]);
		
		$lastInsertID = $db->lastInsertId();
		return $lastInsertID;
		
	}

	function insertChoises($id,$data,$i){
	global $db;
		$quest = getQuest($data['anket_id'],$i); // anket id ekle  
		$type = getQuestType($data['anket_id'],$i);
		$desc = "";
		$desc = $data['whynot'.$i];
		$data =[$id,$quest,$data['choice'.$i],$type,$desc];
		$query = $db->prepare('INSERT INTO anket_sonuc_cevaplar (sonucID,soru,cevap,tip,aciklama) VALUES (?,?,?,?,?)');
		$query->execute($data);
	}
 function getQuest($anketID,$i){
	
	global $db;
	$data = [];
	$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			array_push($data, $row['soru']);
		}
	}
	return $data[$i];	
 }
 function getQuestType($anketID,$i){
	global $db;
	$data = [];
	$sql = "SELECT * FROM soru WHERE anketID={$anketID}";
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			array_push($data, $row['tip']);
		}
	}
	return $data[$i];	


 }

 /*
choice0=qwe&
choice2=YES&


************

&choice0=wqd
&choice2=YES

 */