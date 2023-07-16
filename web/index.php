<!-- index.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Приветствие</title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "Привет, " . $_SESSION['username'] . "!<br>";
    echo '<a href="exit.php">Выйти</a>';
} else {
    ?>
    <form action="post.php" method="post">
        Введите ваше имя: <input type="text" name="username">
        <input type="submit" value="Отправить">
    </form>
    <?php
}
?>
</body>
</html>
