
<?php
	include_once 'utils/listAnket.php';
	include_once 'utils/renderQuest.php';

	if ($_GET['test'] == 1) {
		getQuest($_GET['quest_id']);
	}
	if ($_GET['test'] == 2) {
		getChoice(2);
	}
	if ($_GET['test'] == 3) {
		?>
		<form method="post">	
			<?php
		$size = renderQuests($_GET['quest_id']); ?>
		<input	type="hidden" name="size" value="<?php echo $size; ?>">
		<button type="submit">asd</button>
	</form>
		<?php
	}

	if ($_POST) {
		print_r($_POST);
	}

	/*
	include_once "utils/anketCreator.php";

	if(@$_GET['add_quest']){
		addQuest(
			$_GET['anket_id'],
			$_GET['quest'],
			$_GET['type'],
			$_GET['sik']
	);
	}
	*/
	/*

	if(@$_GET['add_anket']){
		createAnket($_GET['title']);
	}

	 */
	?>
