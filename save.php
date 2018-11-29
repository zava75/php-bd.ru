<?php
file_put_contents('bd.txt',
    "\n Дата сообщения: $post->data \n Имя:  $post->name \n Сообщение:  $post->message  \n \r",
    FILE_APPEND); // Внесение в TXT

$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'phpbd_ru'; // Имя БД
$db_table = "tb_form"; // Имя Таблицы БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base); // Соединение с БД

$result = $mysqli->query
("INSERT INTO ".$db_table." (user_id,tb_message,tb_date) 
VALUES ('$post->name','$post->message','$post->data')"); // Внесение в БД


