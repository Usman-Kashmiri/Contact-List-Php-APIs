<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Access-Control-Allow-Methods, Authorization');

// We've used here json_decode function to decode json formate data coming form any kind of application i.e: web app / android app / ios app etc. 

$data = json_decode(file_get_contents("php://input"), true);

include "config.php";

$contact_id = $data['c_id'];

$query = "DELETE FROM contactlist WHERE id = '{$contact_id}'";

if (mysqli_query($conn, $query)) {
    echo json_encode(array('message' => 'Record Deleted Successfully.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Failed to Delete Record.', 'status' => false));
}

?>