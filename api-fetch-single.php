<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$contact_id = isset($_GET['id']) ? $_GET['id'] : die();;

include "config.php";

$query = "SELECT * FROM contactlist WHERE id = {$contact_id}";
$result = mysqli_query($conn, $query) or die("SQL Query Failed...");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}


?>