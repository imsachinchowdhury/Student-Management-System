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
$image="SELECT * FROM teacher_details WHERE id='$id'";
$run=mysqli_query($conn,$image);
while($row=mysqli_fetch_array($run))
{
    $img=$row['photo'];
}
unlink('teacher_image/'.$img);
$query="DELETE FROM teacher_details WHERE id=$id";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Delete From database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0 URL='http://localhost/student_management_system/view_teacher.php'">
<?php
}
else
{
    echo "<script>alert('Data not Insert Into Database')</script>";
}
?>
