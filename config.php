<?php
// Название сервера (хоста)
$host = "localhost";
// Название БД
$db_name = "dbPost";
// Имя пользователя (логин)
$user_name = "admin";
// Пароль
$user_password = "123";

// Переменная с помощью которой происходит подсоединения к БД
$connect = mysql_connect("$host","$user_name","$user_password");

// Выбор данной БД
mysql_select_db("$db_name", "$connect");

// Устанавливаю кодировку
mysql_query("SET NAMES 'utf-8' ");