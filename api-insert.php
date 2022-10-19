<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Access-Control-Allow-Methods, Authorization');

include "config.php";

// We've used here json_decode function to decode json formate data coming form any kind of application i.e: web app / android app / ios app etc. 

$data = json_decode(file_get_contents("php://input"), true);

$contact_id = $data['c_id'];
$contact_fname = $data['c_fname'];
$contact_lname = $data['c_lname'];
$contact_ph = $data['c_ph'];
$contact_email = $data['c_email'];
$contact_imgpath = $data['c_imgpath'];
$contact_address = $data['c_address'];

$query = "INSERT INTO contactlist(id, first_name, last_name, phone_no, email_address, image_path, contact_address) VALUES ('{$contact_id}','{$contact_fname}','{$contact_lname}','{$contact_ph}','{$contact_email}','{$contact_imgpath}','{$contact_address}')";

if (mysqli_query($conn, $query)) {
    echo json_encode(array('message' => 'Record Inserted Successfully.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Record Not Inserted.', 'status' => false));
}


?>