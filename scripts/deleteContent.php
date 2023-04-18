<?php
require('connect.php');
$id = $_GET['id'];
$contentDelete = $link->query("DELETE FROM `content` WHERE `id`='$id';");
header('Location: ../newContent.php');