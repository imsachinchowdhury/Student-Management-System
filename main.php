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
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="main.php" class="text-info"><font size="5"><b>XYZ SCHOOL</b></font></a>&nbsp &nbsp &nbsp &nbsp &nbsp 
            <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#menu">

            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="container">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item"><a class="navbar-link text-light" href="add_teacher.php">Add Teacher details</a></li>&nbsp &nbsp   &nbsp
                <li class="navbar-item"><a class="navbar-link text-light" href="view_teacher.php">View Teacher details</a></li>&nbsp &nbsp  &nbsp
                <li class="navbar-item"><a class="navbar-link text-light" href="addstudent.php">Add Student details</a></li>&nbsp &nbsp   &nbsp
                <li class="navbar-item"><a class="navbar-link text-light" href="viewstudent.php">View Student details</a></li>&nbsp &nbsp   &nbsp
                <li class="navbar-item"><a class="navbar-link text-light" href="logout.php">Logout</a></li>&nbsp &nbsp   &nbsp
            </ul>
        </div>
        </div>
</nav>
<br><br><br>
<div class="container">
<table width="100%" style="text-align:center" border="2px" class="bg-danger">
<tr>
    <td width="33%" height="150px"><a href="addstudent.php"><i class='fas fa-book-reader'  style='font-size:200%;'></i><br><font size="4" color="white"><b>Add Student Detail</b></font></a></td>
    <td width="33%" height="150px"><a href="viewstudent.php"><i class="fa fa-eye" style="font-size:200%;"></i><br><font size="4" color="white"><b>View Student Detail</b></font></a></td>
    <td width="33%" height="150px"><a href="viewstudent.php"><i class="fa fa-edit" style="font-size:200%;"></i><br><font size="4" color="white"><b>Edit Student Detail</b></font></a></td>
</tr>
<tr>
    <td width="33%" height="150px"><a href="add_teacher.php"><i class='fas fa-book-reader'  style='font-size:200%;'></i><br><font size="4" color="white"><b>Add Teacher Detail</b></font></a></td>
    <td width="33%" height="150px"><a href="view_teacher.php"><i class="fa fa-eye" style="font-size:200%;"></i><br><font size="4" color="white"><b>View Teacher Detail</b></font></a></td>
    <td width="33%" height="150px"><a href="view_teacher.php"><i class="fa fa-edit" style="font-size:200%;"></i><br><font size="4" color="white"><b>Edit Teacher Detail</b></font></a></td>
</tr>
</table>
</div>
</body>
</html>