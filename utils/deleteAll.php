<?php 
    include_once '../settings/init.php';

    if(@$_GET['delete']=="all"){
        $sql = [
            'DELETE FROM anket_sonuc',
            'DELETE FROM anket_sonuc_cevaplar'
        ];
        deleteAll($sql);

    }

    function deleteAll($sql)
    {
        global $db;
        foreach ($sql as $key) {
            $res = $db->query($key);
        }
	echo '<script>window.location.href="../admin/anket-kullanici-bilgileri.php"</script>';

    }