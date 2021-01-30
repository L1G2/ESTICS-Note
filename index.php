<?php
    define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
    require_once(ROOT.'Models/connectDB.php');
    require_once(ROOT.'Views/login.php');
?>
