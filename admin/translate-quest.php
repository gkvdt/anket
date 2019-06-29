<?php
	include_once 'header.php';

	include_once '../utils/translateHandler.php';
?>

<form method="get" action="../utils/translateToArabic.php";>

<?php
	if(@$_GET['quest_id']){

		getQuest($_GET['quest_id']);
	}else{
		echo '<script>window.location.href="../admin/anket-listele.php"</script>';

	}
?>
<button type="submit" class="btn btn-success">Translate</button>
</form>

<?php	
	include_once 'footer.php';
	?>