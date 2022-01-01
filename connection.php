<?php
$servername="localhost";
$username="root";
$password="";
$databasename="studentmanagementproject";
$conn=mysqli_connect($servername,$username,$password,$databasename);
if($conn)
{
    //echo "connected";
}
else{
    echo "<script>alert('Connection Not Establish')</script>";
}

?>