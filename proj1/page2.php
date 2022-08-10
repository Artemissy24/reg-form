<?php
$servername="localhost";
$username="root";
$pwd="";
$dbname="page";

$conn=mysqli_connect($servername,$username,$pwd,$dbname);
if($conn)
{
    //echo "Connection OK";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>