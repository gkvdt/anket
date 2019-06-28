<?php

	include_once 'utils/listAnket.php';
	

	function getAktifAnket(){
		return aktifAnketID();
	}



	function renderQuests($anketID)
	{
		$quests = getQuest($anketID);
		$size = 0;
		//print_r($quests);
		for ($i = 0 ;$i < count($quests);$i++) {
			renderQuest($quests[$i], $i,$anketID);
			$size++;
		}
		return $size;
	}

	function renderQuest($quest, $index,$anketID)
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
	function renderAnketID($anketID){
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
                    class="star star-5"
                    id="star-5"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="5"
                />
                <label class="star star-5" for="star-5"></label>
                <input
                    class="star star-4"
                    id="star-4"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="4"
                />
                <label class="star star-4" for="star-4"></label>
                <input
                    class="star star-3"
                    id="star-3"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="3"
                />
                <label class="star star-3" for="star-3"></label>
                <input
                    class="star star-2"
                    id="star-2"
                    type="radio"
							name="choice<?php echo $index; ?>"
					value="2"
                />
                <label class="star star-2" for="star-2"></label>
                <input
                    class="star star-1"
                    id="star-1"
							name="choice<?php echo $index; ?>"
                    type="radio"
					value="1"
                />
                <label class="star star-1" for="star-1"></label>
							</div>
							</div>
							<hr>
<?php
	}

	function renderYesOrNoQuest($quest, $index)
	{
		?>
<div class="row clearfix">
                            <label style="font-weight: bold;" class="text-dark">Survey Question:  </label>&nbsp;
                            <label  class="text-dark"><?php echo $quest['soru']; ?> </label>

                        </div>

                        <div class="row clearfix">

							<input type="radio" 
							name="choice<?php echo $index; ?>"
							 value="YES" class="radio" onclick="open2()">&nbsp;
                            <label class="text-center"> YES</label>
                        </div>

                        <div class="row clearfix">

                            <input type="radio" name="choice<?php echo $index; ?>" value="NO" class="radio" onclick="open1()">&nbsp;
                            <label class="text-center"> NO</label>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="openr" type="text" style="display: none;" class="form-control" placeholder="Why not?" name="whynot<?php echo $index; ?>" />
                                </div>

                            </div>

                        </div>
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
	<?php
		foreach ($quest['choice'] as $key) {
			?>
			<div class="row clearfix">
			<input type="radio" name="choice<?php echo $index; ?>" value="
			<?php echo $key; ?>
			" class="radio" onclick="open2()">
			<label class="text-center"><?php echo $key; ?></label>
			&nbsp;
			</div>
		
			<?php
		} ?> <hr><?php
	}
