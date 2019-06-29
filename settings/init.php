<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=anket;charset=utf8", "root", "");
        ini_set('default_charset', 'UTF-8');
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