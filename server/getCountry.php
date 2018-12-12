<?php
include $_SERVER['DOCUMENT_ROOT']."/server/pdo.php";

//Функция для получения значений из БД в массив $countryList
function getCountry($dbh){
    $countryList = array();
    $result = $dbh->query("SELECT id,name,continent FROM Country");
    $i=0;
    while($row = $result->fetch()){
        $countryList[$i]['id'] = $row['id'];
        $countryList[$i]['name'] = $row['name'];
        $countryList[$i]['continent'] = $row['continent'];
        $i++;
    }
    return $countryList;
}
$country = getCountry($dbh);