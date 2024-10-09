<?php
$servername='localhost';
$username='root';
$password='';
$dbname='health';
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error)
{
    die("connection failed");
}