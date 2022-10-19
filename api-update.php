<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers,Access-Control-Allow-Methods, Authorization');

// We've used here json_decode function to decode json formate data coming form any kind of application i.e: web app / android app / ios app etc. 

$data = json_decode(file_get_contents("php://input"), true);

include "config.php";

$contact_id = $data['c_id'];
$contact_fname = $data['c_fname'];
$contact_lname = $data['c_lname'];
$contact_ph = $data['c_ph'];
$contact_email = $data['c_email'];
$contact_imgpath = $data['c_imgpath'];
$contact_address = $data['c_address'];

$query = "UPDATE contactlist SET first_name='{$contact_fname}',last_name='{$contact_lname}',phone_no='{$contact_ph}',email_address='{$contact_email}',image_path='{$contact_imgpath}',contact_address='{$contact_address}' WHERE id = '{$contact_id}'";

if (mysqli_query($conn, $query)) {
    echo json_encode(array('message' => 'Record Updated Successfully.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Record Not Updated.', 'status' => false));
}

?>