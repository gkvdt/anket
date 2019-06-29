<?php 

include_once '../settings/init.php';


if($_GET){
			translateQuest($_GET['id'],$_GET['anket_id'],$_GET['quest'],$_GET['typ']);
			
}


function translateQuest($questID,$anketID,$soru,$tip){
	if(chechExist($questID) == 0){
		addArabicQuest($questID,$anketID,$soru,$tip);
		// şk ekle addChoice();
		addChoice($tip,$questID);
		
	}else{
		updateArabicQuest($questID,$soru);
	}
	echo '<script>window.location.href="../admin/anket-listele.php"</script>';

}

function chechExist($id){
	global $db;
	$sql = "SELECT * FROM asoru WHERE id={$id}";
	$result = $db->query($sql);

	return sizeof($result->fetchAll());
}
	
function addArabicQuest($questID,$anketID,$soru,$tip){
	global $db;
	$sql = "INSERT INTO asoru (id,anketID,soru,tip) VALUES (?,?,?,?)";
	$result = $db->prepare($sql);
	if( $result->execute([$questID,$anketID,$soru,$tip])){
		echo 'ok';
	}
}

function updateArabicQuest($questID,$soru){
	global $db;
	$sql = "UPDATE asoru SET soru=? WHERE id=?";
	$result = $db->prepare($sql);
	if( $result->execute([$soru,$questID])){
		echo 'ok';
	}
}

///////////////////////////////////********************************////////// */







	function createSik($soruID, $sik)
	{
		global $db;
		foreach ($sik as $val) {
			$sql = 'INSERT INTO asik(soruID,val) VALUES (?,?)';
			$query = $db->prepare($sql);
			if (!$query->execute([$soruID, $val])) {
				return false;
			}
		}
	}

	function explodeToArray($data)
	{
		return preg_split('/\r\n|[\r\n]/', $data);
	}
	function createYesOrNo($soruID, $quest)
	{
		$sik = ['نعم فعلا', 'لا'];
		createSik($soruID, $sik);
	}

	function createMultiOption($soruID, $choice)
	{
		$sik = explodeToArray($choice);
		createSik($soruID, $sik);
	}
	function createStars($soruID)
	{
		$sik = ' ';
		createSik($soruID, $sik);
	}



	function addChoice($tip,$soruID) {
		switch ($tip) {
			case 1:
				createMultiOption($soruID, $_GET['choice']);
				break;
			case 2:
				createYesOrNo($soruID);
				break;
			case 3:
				createStars($soruID);
				break;

			default:
				echo 'error';
				break;
		}
	}
