<?php

header("Content-Type; application/json");
header("Acess-Control-Allow-Origin: *");


$data = json_decode (file_get_contents ("php://input"), true);

$psearch = isset($data["search"]);

require_once "dbconfig.php";

echo $query = "SELECT * FROM klet WHERE ime LIKE '%".$psearch."%' " ;

$result = mysqli_query($conn, $query) or die("Search Query Failed");

$count = mysqli_num_rows ($result);

if ($count > 0)
{
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($row);
}
else
{
echo json_encode (array("message" => "NAPAKA ni najdenega produkta","status" => false));
}

?>