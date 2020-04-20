<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Компаниец Елена</title>
    <link rel="stylesheet" href="../css/style_reg.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!-- Форма регистрации -->
    <form action="../include/signup.php" method="post" enctype="multipart/form-data">
        <label>Фамилия и имя</label>
        <input type="text" name="name" placeholder="Введите свое имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">        
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/php/index.php">Авторизоваться</a>
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