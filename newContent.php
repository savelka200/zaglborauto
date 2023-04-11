<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        session_start();
        if ($_SESSION['user']['rights'] != 'admin'){
            header('Location: login.php');
        }
    ?>
    <a href="index.php">Домой</a>
    Вход
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
</body>

</html>