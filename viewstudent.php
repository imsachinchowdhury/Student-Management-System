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
                <li class="navbar-item"><a class="navbar-link text-light" href="#">Add Teacher details</a></li>&nbsp &nbsp   &nbsp
                <li class="navbar-item"><a class="navbar-link text-light" href="#">View Teacher details</a></li>&nbsp &nbsp  &nbsp
                <li class="navbar-item"><a class="navbar-link text-light"href="addstudent.php">Add Student details</a></li>&nbsp &nbsp   &nbsp
                <li class="navbar-item"><a class="navbar-link text-light"href="viewstudent.php">View Student details</a></li>&nbsp &nbsp   &nbsp
            </ul>
        </div>
        </div>
</nav>
<br><br><br>
<div class="container">
    <h3 class="text-center bg-danger text-light">View Student Details</h3>
    <br>
    <table border="2px" width="100%" class="bg-primary" style="text-align:center">
        <tr>
            <center><td width="30%" height="150px" class="clr"><a href="class1.php"><font color="white"><b>Class 1</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class2.php"><font color="white"><b>Class 2</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class3.php"><font color="white"><b>Class 3</b></font></a></td></center>
        </tr>
        <tr>
            <center><td width="30%" height="150px" class="clr"><a href="class4.php"><font color="white"><b>Class 4</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class5.php"><font color="white"><b>Class 5</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class6.php"><font color="white"><b>Class 6</b></font></a></td></center>
        </tr>
        <tr>
            <center><td width="30%" height="150px" class="clr"><a href="class7.php"><font color="white"><b>Class 7</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class8.php"><font color="white"><b>Class 8</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class9.php"><font color="white"><b>Class 9</b></font></a></td></center>
        </tr>
        <tr>
            <center><td width="30%" height="150px" class="clr"><a href="class10.php"><font color="white"><b>Class 10</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class11.php"><font color="white"><b>Class 11</b></font></a></td></center>
            <center><td width="30%" height="150px" class="clr"><a href="class12.php"><font color="white"><b>Class 12</b></font></a></td></center>
        </tr>

    </table>

</div>
<script>

</script>
</body>


</html>
