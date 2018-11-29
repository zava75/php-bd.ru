<?php
class Foo {
    public  $id;
    public $user_id;
    public $tb_date;
    public $tb_message;
}
$dbh = new PDO('mysql:dbname=phpbd_ru;host=localhost:3306;', 'root', '');
//Готовим запрос
//if($dbh){
//    echo  'Соединение установлено с БД';
//}
//else {
//    echo 'Соединение нету с БД';
//}

$sth = $dbh->prepare(
    'SELECT * FROM tb_form'
);
//Выполняем запрос:
$sth->execute();
// Получаем от данные результата запроса:
$data = $sth->fetchAll(PDO::FETCH_CLASS, 'Foo');
var_dump($data);

echo '<h1>Вывод сообщений</h1>';
// Вывод данных
foreach ($data as $line){
//   echo $line->id.'<br>';
    echo $line->tb_date.'<br>';
    echo $line->user_id.'<br>';
    echo $line->tb_message.'<br>';
    echo '<br>';
}



