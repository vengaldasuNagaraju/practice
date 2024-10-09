<?php
include 'connection.php';

$Passwordcheck = "select * from employee where name='". $_POST["name"] ."' and password ='". $_POST["password"] ."' ";

$result= $con->query($Passwordcheck);

if($result->num_rows>0)
echo "login successful";
else
echo "employee details doesnt match" .$con->error;

$con->close();