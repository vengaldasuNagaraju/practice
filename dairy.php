<?php
include 'connection.php';

$insert=" insert into otp(name,mobileno) 
values( '". $_POST["name"] ."',
'". $_POST["mobileno"] ."') ";

if($con-> query($insert) === TRUE)
    echo "succesfully inserted";
else
    echo "not inserted";
$con->close();

//$insert="insert into dairy(id,name,salary,experience) 
//values('".$_POST["id"]."',
// '".$_POST["name"]."',
// '".$_POST["salary"]."',
// '".$_POST["experience"]."')";

//if($con-> query($insert) === TRUE)
  //  echo "succesfully inserted";
//else
    // echo "not inserted";
// $con->close();