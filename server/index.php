<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/server/pdo.php";

    //Получаем данные с input и удаляем некорректные символы
    $nameCountry = htmlspecialchars(trim($_POST["nameCountry"]));
    $continentCountry = htmlspecialchars(trim($_POST["continentCountry"]));

    //Создаем и отправляем запрос в бд
    $sql = "INSERT INTO Country SET name = '$nameCountry' ,continent = '$continentCountry' ";
    $request = $dbh->prepare($sql);
    $request->execute();

    //Редирект
    header("Location: http://interface/view/countrytable.php");


