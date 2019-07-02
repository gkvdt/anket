<?php
include "../settings/init.php";

    $id = get('id');
    $query = $db->prepare("DELETE from admin WHERE admin_id= :id");
    $delete = $query->execute(array(
        'id' => $id
    ));
    if ($delete) {
        echo "başarılı";
        header("location:users.php");
    } else {
        echo "hatalı işlem yaptınız";
    }




