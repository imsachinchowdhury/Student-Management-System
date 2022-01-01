<?php
include("connection.php");
error_reporting(0);
session_start();
$user=$_SESSION['username'];
if($user == true)
{

}
else
{
    header('location:index.php');
}
$id=$_GET['id'];
$image="SELECT * FROM student_detail WHERE id='$id'";
$run=mysqli_query($conn,$image);
while($row=mysqli_fetch_array($run))
{
    $img=$row['photo'];
}
unlink('images/'.$img);
$query="DELETE FROM student_detail WHERE id=$id";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Delete From database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0 URL='http://localhost/student_management_system/viewstudent.php'">
<?php
}
else
{
    echo "<script>alert('Data not Insert Into Database')</script>";
}
?>
