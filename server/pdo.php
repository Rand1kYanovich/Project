<?php
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
   $dbh = new PDO("mysql:dbname=testbd;host=localhost","root","",$opt);
//Устанавливаем соединение с БД