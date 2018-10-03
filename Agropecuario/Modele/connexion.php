<?php
    $dbname = "BDD-MSH";
    $host='localhost:8889';
    $user='root';
    $pass='root';

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
?>