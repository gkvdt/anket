<?php

include_once 'settings/init.php';


function getQuest($anketID)
{
	global $db;
	$sql = "SELECT * FROM asoru WHERE anketID={$anketID}";
	$quests = [];
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			$res = getChoice($row['id']);
			$row['choice'] = $res;
			array_push($quests, $row);
		}
	}
	return $quests;
}

function getChoice($soruID)
{
	global $db;
	$choice = [];
	$sql = "SELECT * FROM asik WHERE soruID={$soruID}";
	$result = $db->query($sql, PDO::FETCH_ASSOC);
	if ($result->rowCount() > 0) {
		foreach ($result as $row) {
			array_push($choice, $row['val']);
		}
	}
	return $choice;
}
function aktifAnketID()
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


function getAktifAnket()
{
    return aktifAnketID();
}

function renderArabicQuests($anketID)
{
    $quests = getQuest($anketID);
    $size = 0;
    //print_r($quests);
    for ($i = 0; $i < count($quests); $i++) {
        renderQuest($quests[$i], $i, $anketID);
        $size++;
    }
    return $size;
}

function renderQuest($quest, $index, $anketID)
{
    renderAnketID($anketID);
    switch ($quest['tip']) {
        case 1:
            //TODO çoklu
            renderMultiTypeQuest($quest, $index);
            break;
        case 2:
            // TODO true or false
            renderYesOrNoQuest($quest, $index);
            break;

        case 3:
            // TODO stars
            renderStars($quest, $index);
            break;

        default:
            //
            break;
    }
}
function renderAnketID($anketID)
{
    ?>
			<input type="hidden" name="anket_id" value="<?php echo $anketID; ?>">
		<?php
}
function renderStars($quest, $index)
{
    ?>
			<div class="row clearfix">
							<label  class="text-dark"><?php echo $quest['soru']; ?> </label>
	</div>
			<div class="row clearfix">


        <div class="stars">
 <input
                    class="star<?php echo $index;?> star-5<?php echo $index;?>"
                    id="star-5<?php echo $index;?>"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="5"
                />
                <label class="star<?php echo $index;?> star-5<?php echo $index;?>" for="star-5<?php echo $index;?>"></label>
                <input
                    class="star<?php echo $index;?> star-4<?php echo $index;?>"
                    id="star-4<?php echo $index;?>"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="4"
                />
                <label class="star<?php echo $index;?> star-4<?php echo $index;?>" for="star-4<?php echo $index;?>"></label>
                <input
                    class="star<?php echo $index;?> star-3<?php echo $index;?>"
                    id="star-3<?php echo $index;?>"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="3"
                />
                <label class="star<?php echo $index;?> star-3<?php echo $index;?>" for="star-3<?php echo $index;?>"></label>
                <input
                    class="star<?php echo $index;?> star-2<?php echo $index;?>"
                    id="star-2<?php echo $index;?>"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="2"
                />
                <label class="star<?php echo $index;?> star-2<?php echo $index;?>" for="star-2<?php echo $index;?>"></label>
                <input
                    class="star<?php echo $index;?> star-1<?php echo $index;?>"
                    id="star-1<?php echo $index;?>"
							name="choice<?php echo $index; ?>"
                    type="radio"
					value="1"
                />
                <label class="star<?php echo $index;?> star-1<?php echo $index;?>" for="star-1<?php echo $index;?>"></label>
							</div>
							</div>
							<hr>
<?php setCss($index);
}

function renderYesOrNoQuest($quest, $index)
{
    ?>
<div class="row clearfix">
                            <label style="font-weight: bold;" class="text-dark">Survey Question:  </label>&nbsp;
                            <label  class="text-dark"><?php echo $quest[
                                'soru'
                            ]; ?> </label>

                        </div>

                        <div class="row clearfix">

							<input type="radio" 
							name="choice<?php echo $index; ?>"
							 value="YES" class="radio" onclick="hide<?php echo $index;?>()">&nbsp;
                            <label class="text-center"> نعم فعل</label>
                        </div>

                        <div class="row clearfix">

                            <input type="radio" name="choice<?php echo $index; ?>" value="NO" class="radio" onclick="showDesc<?php echo $index;?>()">&nbsp;
                            <label class="text-center"> لا</label>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="description<?php echo $index;?>" type="text" style="display: none;" class="form-control" placeholder="Why not?" name="whynot<?php echo $index; ?>" />
                                </div>

                            </div>

                        </div>
                        <script>

    function showDesc<?php echo $index;?>() {
        document.getElementById("description<?php echo $index;?>").style.display = "block";
    }

    function hide<?php echo $index;?>() {
        document.getElementById("description<?php echo $index;?>").style.display = "none";
    }
</script>
		<hr>
<?php
}
function renderMultiTypeQuest($quest, $index)
{
    ?>                      <div class="row clearfix">
		
			
			
			<label class="text-center"> 
				<?php echo $quest['soru']; ?> 
			</label>
	</div> 
	<?php foreach ($quest['choice'] as $key) { ?>
			<div class="row clearfix">
			<input type="radio" name="choice<?php echo $index; ?>" value="
			<?php echo $key; ?>
			" class="radio" >
			<label class="text-center"><?php echo $key; ?></label>
			&nbsp;
			</div>
		
			<?php } ?>
		 <hr><?php
}






function setCss($index){
    ?>
    <style>
    div.stars<?php echo $index;?> {
        width: 270px;
        display: inline-block;
    }
    
    input.star<?php echo $index;?> {
        display: none;
    }
    
    label.star<?php echo $index;?> {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all 0.2s;
    }
    
    input.star<?php echo $index;?>:checked ~ label.star<?php echo $index;?>:before {
        content: '\f005';
        color: #fd4;
        transition: all 0.25s;
    }
    
    input.star-5<?php echo $index;?>:checked ~ label.star<?php echo $index;?>:before {
        color: #fe7;
        text-shadow: 0 0 20px #952;
    }
    
    input.star-1<?php echo $index;?>:checked ~ label.star<?php echo $index;?>:before {
        color: #f62;
    }
    
    label.star<?php echo $index;?>:hover {
        transform: rotate(-15deg) scale(1.3);
    }
    
    label.star<?php echo $index;?>:before {
        content: '\f006';
        font-family: FontAwesome;
    }
    </style>
    <?php
}