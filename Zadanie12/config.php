<?php

require_once 'db.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query = "SELECT * FROM tours";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
}

$result2 = mysqli_query($link, "SELECT * FROM tours WHERE name LIKE 'Рос%'");
if($result2)
{
    while($row = $result2->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
}

$someParam = 'Франц';
$result3 = mysqli_query($link, "SELECT * FROM tours WHERE name LIKE '".$someParam."%'");
if($result3)
{
    while($row = $result3->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
}
// закрываем подключение

mysqli_close($link);




?>