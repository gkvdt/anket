<?php
include "../settings/init.php";

$id = get('id');
$query = $db->prepare("DELETE from anket_yesorno WHERE anket_yesorno_id= :id");
$delete = $query->execute(array(
    'id' => $id
));
if ($delete) {
    echo "başarılı";
    header("location:list-yes-or-no-survey.php");
} else {
    echo "hatalı işlem yaptınız";
}







