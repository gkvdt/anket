<?php
	include_once "settings/init.php";

	$lastInsertID;

	function createAnket($title){
		global $db;
		$sql = "INSERT INTO anket (baslik) VALUES ('{$title}')";
		if($db->query($sql)){
			echo "ok";		
		}else{
			echo "error1";
		}

	}
	function addQuest($anketID,$quest,$type,$sik){
		global $lastInsertID;
		global $db;
		$sql = "INSERT INTO anket_data(anketID,soruTip) VALUES (?,?)";
		$query = $db->prepare($sql);
		if($query->execute([$anketID,$type])){
			//soru olustur
			if(createQuest($anketID,$quest,$type)){
				if(createSik($lastInsertID,$sik)){
					echo "error2";
				}
			}else{
				echo "error3";
			}
		}else{
			echo "error4";
		}
	}

	function createQuest($anketID,$quest,$type){
		global $lastInsertID;
		global $db;
		$sql = "INSERT INTO soru(anketID,soru,tip) VALUES (?,?,?)";
		$query = $db->prepare($sql);
		if($query->execute([$anketID,$quest,$type])){
			$lastInsertID = $db->lastInsertId();
			return true;
		}
		return false;
	}

	function createSik($soruID,$sik){
		$siklar = explode("=",$sik);
		global $db;
		foreach ($siklar as $val) {
			$sql = "INSERT INTO sik(soruID,val) VALUES (?,?)";
			$query = $db->prepare($sql);
			if(!$query->execute([$soruID,$val])) return false;
			
		}
	}
