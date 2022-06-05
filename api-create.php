<?php

header("Content-Type; application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST" );
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization");

$data = json_decode (file_get_contents ("php://input"), true);

$pime = isset($data ["ime"]);
$pleto = isset($data["leto"]);
$pzaloga = isset($data["zaloga"]);
$pregija = isset($data["regija"]);
$pposebnosti = isset($data["posebnosti"]);

require_once "dbconfig.php";

$query = "INSERT INTO `klet` (`ime`, `leto`, `zaloga`, `regija`, `posebnosti`) VALUES ('".$pime."', '".$pleto."', '".$pzaloga."', '".$pregija."', '".$pposebnosti."')";

if (mysqli_query($conn, $query) or die("Insert Query Failed"))
{
echo json_encode(array("message" => "Produkt je bil uspesno vstavljen", "status" => true));
}
else
{
echo json_encode (array("message" => "NAPAKA Produkt NI bil vstavljen","status" => false));
}

?>