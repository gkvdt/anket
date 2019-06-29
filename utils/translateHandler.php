<?php

include_once '../settings/init.php';

function getQuest($questID)
{
	global $db;
	$sql = "SELECT * FROM soru WHERE id={$questID}";
	$result = $db->query($sql);
	$data = $result->fetchAll();
	if(sizeof($data)>0){
		renderEditableData($data[0]);
	}
}

function renderEditableData($data)
{
	switch ($data['tip']) {
		case 1:
            //TODO çoklu
            renderMultiTypeQuest($data);
            break;
        case 2:
            // TODO true or false
            renderOther($data);
            break;

        case 3:
            // TODO stars
            renderOther($data);
            break;

        default:
            //
            break;
	}
}

function renderMultiTypeQuest($data){

	?>

	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	<input type="hidden" name="typ" value="<?php echo $data['tip'] ?>">
	<input type="hidden" name="anket_id" value="<?php echo $data['anketID'] ?>">

    <div class="row clearfix">
		

	<div class="col-md-4" id="option1">
            <div class="input-group p-t-10">
                 <input value="<?php echo $data['soru'];?>" name="quest" type="text" class="form-control" placeholder="Add Quest">
            </div>
        </div>
	<div class="col-md-4" >
            <label for="">Add Answers Per Line</label>
            <textarea rows="4" name="choice" class="form-control no-resize" placeholder="Please type what you want..."></textarea>

        </div>
    </div>

<?php
}


function renderOther($data){

?>
	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	<input type="hidden" name="typ" value="<?php echo $data['tip'] ?>">
	<input type="hidden" name="anket_id" value="<?php echo $data['anketID'] ?>">

    <div class="row clearfix">

		<div class="col-md-4" id="option1">
            <div class="input-group p-t-10">
				<input value="<?php echo $data['soru'];?>" name="quest" type="text" class="form-control" placeholder="Add Quest">
            </div>
		</div>
	</div>
		<?php

}




