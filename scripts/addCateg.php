<?php 
require('connect.php');

$text = $_POST['text'];
$color = $_POST['color'] . '2b';

    $categAdd = $link->query("INSERT INTO `categories` (`name`, `color`) VALUE ('$text','$color')");
    header('Location: ../newContent.php');


?>