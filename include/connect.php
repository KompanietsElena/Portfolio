<?php
    //Установка соединения с БД
    $connect = mysqli_connect('localhost', 'root', '', 'reg');

    //Проверка соединения
    if (!$connect) {
        echo('Нет соединения с БД');
    }