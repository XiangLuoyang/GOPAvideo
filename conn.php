<?php
    $dsn="mysql:host=localhost;dbname=Blog";
    $db=new PDO($dsn,'root','');
    $db->query('set names utf-8');
?>
