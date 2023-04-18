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
        include_once('scripts/connect.php');
        $_POST['id']=$_GET['id'];
        $id = $_GET['id'];
        $count = $link->query("SELECT * FROM `content` where `id` = '$id'");
        $count = mysqli_fetch_row($count);

    ?>
<form action="scripts/updateContent.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="text" placeholder="Название" value="<?= $count[1] ?>" required> <br>
        <input type="text" name="url" placeholder="Ссылка" value="<?= $count[3] ?>" required> <br>
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
    <a href="scripts/deleteContent.php?id=<?= $_GET['id'] ?>">Удалить элемент</a>
</body>
</html>