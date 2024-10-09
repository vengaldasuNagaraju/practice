<?php
include 'connection.php';
$getdata = "select * from dairy where name = '".$_POST["name"]."'";
    $result = $con->query($getdata);
    if($result->num_rows>0)
    {
        while($row[] =$result->fetch_assoc())
        {
            //$questions =$row;
           $jsonData=json_encode($row);
        }
        echo $jsonData;
    }
    else
    {
        echo "no data found";
    }
    $con->close();
