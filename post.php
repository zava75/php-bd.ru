<?php
if ($_POST) {
    $nameUser = $_POST['name'];
    $messageUser = $_POST['message'];
require_once (__DIR__.'/Class.php');
$post = new Form();
$post -> name = $nameUser;
$post -> message = $messageUser;
$post -> data = date("(G : i ) d : n : Y ");

require_once (__DIR__.'/save.php');

header('Location: /');}
else {
    header('Location: /');
}