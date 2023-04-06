<?php
$user = 'user_select';
$password = '123qweASD';
$db_name = 'db_select';
$host = 'localhost';

$link = new mysqli($host, $user, $password, $db_name);
$link->set_charset('utf8');


?>