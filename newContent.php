<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        session_start();
        if ($_SESSION['user']['rights'] != 'admin'){
            header('Location: login.php');
        }
    ?>
    <a href="index.php">Домой</a><br>
    Добавить сервис
    <form action="scripts/addContent.php" method="post" enctype="multipart/form-data">
        <input type="text" name="text" placeholder="Название" required> <br>
        <input type="text" name="url" placeholder="Ссылка" required> <br>
        Выберите категорию: <br> <select name="categ">
                <?php
            include_once('scripts/connect.php');
            ?>
            <?php
            $count = $link->query("SELECT * FROM `categories`");
            $count = mysqli_fetch_all($count);
            foreach ($count as $count)
            {
            ?>
            <option value="<?= $count[0] ?>"><?= $count[1] ?></option>
            <?php
             } 
            ?>
            
        </select><br>
        <input type="file" name="pic" multiple accept="image/jpeg,image/png"> <br>
        <input type="submit" value="Добавить"> <br>

    </form><br>
    Добавить категорию:
    <form action="scripts/addCateg.php" method="post">
        <input type="text" name="text" placeholder="Название" required> <br>
        Выберите цвет: <br>
        <input name='color' type="color" value="#ff0000"><br>
        <input type="submit" value="Добавить"> <br>

    </form>
    Изменить сервис: 
    <div style="display: grid;grid-template-columns: repeat(auto-fit, minmax(145px, 1fr));">
    <?php
    $count = $link->query("SELECT * FROM `content` ORDER BY `text`");
    $count = mysqli_fetch_all($count);
    
    foreach ($count as $count)
    {
    ?>
    <a  target="_blank" class= "item" style="" href="updateContent.php?id=<?= $count[0] ?>">
        <div class="picdiv" >
            <img class="pic" src="<?= $count[2]?>"/>
            
        </div>
        <div class="h2div"> <h4><?= $count[1]?></h4> 
    </div>
    </a>

    <?php
     } 
    ?>
    </div>
</body>

</html>