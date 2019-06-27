<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=anket;charset=utf8", "root", "");
    } catch ( PDOException $e ){
        print $e->getMessage();
    }
    function post($name)
    {
        return htmlspecialchars(@trim($_POST[$name]));
    }

    function get($name)
    {
        return htmlspecialchars(trim($_GET[$name]));
    }

?>