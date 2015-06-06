<?php header("Content-Type: text/html; charset=utf-8");
// Название сервера (хоста)
$db_host = "localhost";

// Название БД
$db_name = "dbPost";

// Имя пользователя (логин)
$db_user_name = "root";

// Пароль
$db_password = "1";

// Переменная с помощью которой происходит подсоединения к БД
$connect = mysql_connect("$db_host","$db_user_name","$db_password") or die ("Невозможно подключится к БД: ". mysql_error());

// Выбор данной БД
mysql_select_db("$db_name") or die ("Невозможно выбрать БД: ". mysql_error());

// Устанавливаю кодировку
mysql_query("SET NAMES 'utf-8' ");
