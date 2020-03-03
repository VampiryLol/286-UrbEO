<?php

/*$config = array(
'title' => '#',
'vk_url' => '#',
'db' => array(
'host' => '127.0.0.1',
'username' => 'root',
'password' => '',
'database' => 'db'
)
);*/
require_once "db.php";


$query = "SELECT * FROM country";
$result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));
if ($result)
{
	while ($row = $result->fetch_assoc()) {
		 echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
	}
}

$result2 = mysqli_query($link, "SELECT * FROM country WHERE name LIKE 'Poc%'");
if($result2)
{
	while($row = $result2->fetch_assoc()) {
		echo "id:" . $row["id"]. " - Name: ". $row["name"]. "<br>";
	}
}
$someParam = 'Франц';
$result3 = mysqli_query($link, "SELECT * FROM country WHERE name LIKE '".$someParam."%'");
if($resul3)
{
	while($row = $result3->fetch_assoc()) {
		 echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
	}
}

mysqli_close($link);
?>