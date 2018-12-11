<?php
include_once "PDO.php";
$nameCountry = htmlspecialchars($_POST["nameCountry"]);
$continentCountry = htmlspecialchars($_POST["continentCountry"]);
$dbh->query("INSERT INTO Country SET name = '$nameCountry' ,continent = '$continentCountry'");