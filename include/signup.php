<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        

        $password = md5($password);

        //Вставка записей в таблицу 
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES (NULL, '$name', '$login', '$email', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../php/index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../php/register.php');
    }

?>
