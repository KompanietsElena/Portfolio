<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Компаниец Елена</title>
    <link rel="stylesheet" href="../css/style_reg.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
        <!-- Форма авторизации -->
    <form action="../include/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас еще нет аккаунта? - <a href="/php/register.php">Зарегистрироваться</a>
        </p>
        <p><a href ="../index.html">Выйти на главную страницу </a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>