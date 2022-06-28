<?php
ob_start();
$source_pincode = $_POST['source_pincode'];
$destination_pincode = $_POST['destination_pincode'];
$package_type = $_POST['package_type'];
$package_weight = $_POST['package_weight'];
$t_type = $_POST['transport_mode'];
$packing_required = $_POST['packing_required'];
$sender_name = $_POST['sender_name'];
$sender_phone = $_POST['sender_phone'];
$sender_address = $_POST['sender_address'];
$receiver_name = $_POST['receiver_name'];
$receiver_phone = $_POST['receiver_phone'];
$receiver_address = $_POST['receiver_address'];
$pickup_registered_by = $_POST['pickup_registered_by'];
$pickup_schedule_timing = $_POST['pickup_schedule_timing'];
$contact_person_name = $_POST['contact_person_name'];
$contact_person_mobile = $_POST['contact_person_mobile'];
$pickup_address = $_POST['pickup_address'];
$approx_charges = $_POST['approx_charges'];
$delid = rand(1000000, 9999999);
include "config.php";
$sql = "INSERT INTO `pickup_info`(`pickup_id`,`source_pincode`, `destination_pincode`, `package_type`, `package_weight`, `transport_mode`, `packing_required`, `approx_charges`,`sender_name`,`pickup_registered_by`, `sender_phone`, `sender_address`, `receiver_name`, `receiver_phone`, `receiver_address`, `pickup_schedule_timing`, `contact_person_name`, `contact_person_mobile`, `pickup_address`) VALUE
('$delid', '$source_pincode', '$destination_pincode', '$package_type', '$package_weight', '$t_type', '$packing_required', '$approx_charges', '$sender_name', '$pickup_registered_by', '$sender_phone','$sender_address', '$receiver_name', '$receiver_phone', '$receiver_address', '$pickup_schedule_timing', '$contact_person_name', '$contact_person_mobile', '$pickup_address' )";
$query = mysqli_query($conn, $sql);
if ($query == True) {
    header("Location:track.php?v=true&id=$delid");
}
