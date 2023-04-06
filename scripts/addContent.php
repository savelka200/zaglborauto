<?php 
require('connect.php');

$text = $_POST['text'];
$url = $_POST['url'];
$categ = $_POST['categ'];
$path = 'img/' . time() . $_FILES['pic']['name'];

if (!move_uploaded_file($_FILES['pic']['tmp_name'], '../' . $path)) {
    $contentAdd = $link->query("INSERT INTO `content` (`text`, `url`,`categ_id`) VALUE ('$text','$url','$categ')");
    header('Location: ../newContent.php');

}
else{
    $contentAdd = $link->query("INSERT INTO `content` (`text`,`pic`, `url`,`categ_id`) VALUE ('$text','$path','$url','$categ')");
    header('Location: ../newContent.php');
}



?>