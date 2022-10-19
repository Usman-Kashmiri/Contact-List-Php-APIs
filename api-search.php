<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$search_value = isset($_GET['search']) ? $_GET['search'] : die();

include "config.php";

$query = "SELECT * FROM contactlist WHERE first_name LIKE '%{$search_value}%' OR last_name LIKE '%{$search_value}%' OR phone_no LIKE '%{$search_value}%' OR contact_address LIKE '%{$search_value}%'";

$result = mysqli_query($conn, $query) or die("SQL Query Failed...");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}


?>