<?php

header("Content-Type; application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization");

$data = json_decode (file_get_contents ("php://input"), true);

$pid_vina = isset($data ["id_vina"]);

require_once "dbconfig.php";

echo $query = "DELETE FROM `klet` WHERE id_vina= '".$pid_vina."' " ;

if (mysqli_query($conn, $query) or die("Delete Query Failed"))
{
echo json_encode(array("message" => "Produkt je bil uspesno izbrisan", "status" => true));
}
else
{
echo json_encode (array("message" => "NAPAKA Produkt NI bil izbrisan","status" => false));
}

?>
