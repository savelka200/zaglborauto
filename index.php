<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header><img src="res/whitelogo.png" id="logo"/> <a href="newContent.php">Админка</a></header>
    <?php
    include_once('scripts/connect.php');
    ?>
    <?php
    $category = $link->query("SELECT * FROM `categories`");
    $category = mysqli_fetch_all($category);
    foreach ($category as $category)
    {
    ?>
    <div style="background-color:<?= $category[2]?>">
    <h1><?= $category[1] ?></h1>
    <div id="content">
    
    
    <?php
    $count = $link->query("SELECT * FROM `content` where `categ_id` = '$category[0]'");
    $count = mysqli_fetch_all($count);
    foreach ($count as $count)
    {
    ?>
    <a  target="_blank" class= "item" href="<?= $count[3] ?>">
        <div class="picdiv">
            <img class="pic" src="<?= $count[2]?>"/>
            
        </div>
        <div class="h2div"> <h2><?= $count[1]?></h2> 
    </div>
    </a>

    <?php
     } 
    ?>
    </div>
    </div>
    <?php
     } 
    ?>
</body>
</html>