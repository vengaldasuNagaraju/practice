<?php

include 'connection.php';

$first="select * from otp where mobileno = '". $_POST["mobileno"] ."' and send_otp ='".$_POST["send_otp"]."'";

$second=$con->query($first);

if($second->num_rows>0)
{
    echo "verified otp";
}
else
{
    echo "not verified otp";
}