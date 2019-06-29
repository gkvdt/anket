<?php

include_once '../settings/init.php';

function renderEditor(){
	$quest = getQuestData($_GET['quest_id']);
	renderQuest($quest[0]);
	
}

function getQuestData($questID)
{
    global $db;
    $sql = "SELECT * FROM soru WHERE id={$questID}";
    $result = $db->query($sql);
    $data = $result->fetchAll();
    return $data;
}

function renderQuest($data)
{
    ?>
	 <input value="<?php echo $data['id']; ?>" type="hidden" name="id">
	
	 <?php
  mQuest($data['soru']);
}

function mQuest($soru){
	?>
	<div class="col-md-4" id="option1">
            <div class="input-group p-t-10">
                 <input name="quest" type="text" class="form-control" id="questtext" value="<?php echo $soru; ?>">
                
            </div>
        </div>
	<?php
}
