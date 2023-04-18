<?php 
require('connect.php');

$id = $_GET['id'];
$text = $_POST['text'];
$url = $_POST['url'];
$categ = $_POST['categ'];
$path = 'img/' . time() . $_FILES['pic']['name'];

if (!move_uploaded_file($_FILES['pic']['tmp_name'], '../' . $path)) {
    $contentAdd = $link->query("UPDATE `content` SET `text`='$text', `url`='$url',`categ_id`='$categ' WHERE `id`='$id';");
    header('Location: ../newContent.php');

}
else{
    $contentAdd = $link->query("UPDATE `content` SET `text`='$text', `url`='$url',`categ_id`='$categ',`pic`='$path' WHERE `id`='$id';");
    header('Location: ../newContent.php');
}



?>