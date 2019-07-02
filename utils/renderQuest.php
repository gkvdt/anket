<?php

include_once 'utils/listAnket.php';

function getAktifAnket()
{
    return aktifAnketID();
}

function renderQuests($anketID)
{
    $quests = getQuest($anketID);
    $size = 0;
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
        case 4 : 
            //TODO only text
            renderText($quest,$index);
            break;

        case 5:
            //TODO employee
            renderEmployee($quest,$index);
            break;
        default:
            //
            break;
    }
}

function renderEmployee($quest,$index){
?>
<div class="row clearfix">
        <div class="row" style="justify-content:center;">
			      <div class="col-md-6" style="border:1px; border-style:dotted; border-color:#fff;">
                <label class="" style="font-size:13px;font-weight: 500; color:#704214 !important;"> <?php echo $quest['soru']; ?> </label>
                <select style="border:1px solid #fff; border-radius:20px; background:transparent;"  id="tabin" class="form-control"
                name="choice<?php echo $index; ?>"
                 >

            


        <?php renderOptions(); ?>
        </select>
</div>
</div>
</div>
<hr>

<?php
}
function renderOptions(){
    global $db;
    $sql="SELECT * FROM employee";
    $result = $db->query($sql);
    
    foreach ($result->fetchAll() as $row) {
        ?>
        <option value="<?php echo $row['employee_name']; ?>">
            <?php echo $row['employee_name']; ?>
            </option>
        <?php
    }
}
function renderText($quest,$index){
?>
<div class="row clearfix">
    <label  style="font-weight:bold; font-size:17px;"  class="text-dark"><?php echo $quest[
        'soru'
    ]; ?> </label>

</div>

<div class="row clearfix">
    <input type="text" 
    name="choice<?php echo $index; ?>" 
    >
</div>



<?php
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
                           
							<label style="font-weight:bold; font-size:17px;" class="text-dark"><?php echo $quest['soru']; ?> </label>
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
                         
                            <label  style="font-weight:bold; font-size:17px;"  class="text-dark"><?php echo $quest[
                                'soru'
                            ]; ?> </label>

                        </div>

                        <div class="row clearfix">

							<input type="radio" 
							name="choice<?php echo $index; ?>"
							 value="YES" class="radio" onclick="hide<?php echo $index;?>()">&nbsp;
                            <label style="font-weight:bold; color:#704214; padding-left:5px; margin-top:-5x;" class="text-center"> YES</label>
                        </div>

                        <div class="row clearfix">

                            <input type="radio" name="choice<?php echo $index; ?>" value="NO" class="radio" onclick="showDesc<?php echo $index;?>()">&nbsp;
                            <label style="font-weight:bold; color:#704214; padding-left:5px; margin-top:-5x;" class="text-center"> NO</label>
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
		
			
       
			<label  style="font-weight:bold; font-size:17px;" class="text-center"> 
				<?php echo $quest['soru']; ?> 
			</label>
	</div> 
	<?php foreach ($quest['choice'] as $key) { ?>
			<div class="row clearfix">
			<input type="radio" name="choice<?php echo $index; ?>" value="
			<?php echo $key; ?>
			" class="radio" >
			<label style="font-weight:bold; color:#704214; padding-left:5px; margin-top:-5x;" class="text-center"><?php echo $key; ?></label>
			
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