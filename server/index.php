<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/server/PDO.php";
    $nameCountry = htmlspecialchars(trim($_POST["nameCountry"]));
    $continentCountry = htmlspecialchars(trim($_POST["continentCountry"]));
    $sql = "INSERT INTO Country SET name = '$nameCountry' ,continent = '$continentCountry' ";
    $request = $dbh->prepare($sql);
    $request->execute();
    header("Location: http://interface/view/countryTable.php");


