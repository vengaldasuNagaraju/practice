<?php

include 'connection.php';

$send = " select * from otp where mobileno = '". $_POST["mobileno"] ."' ";

$result=$con->query($send);

if($result->num_rows>0)
{
    $number = rand(1000,9999);

    $add="Update otp SET send_otp=$number where mobileno= '". $_POST["mobileno"] ."' ";
    $result2=$con->query($add);
    echo "otp sent". $number;
}
else{
    echo "mobile number doesnt exist in database";
}
$con->close();