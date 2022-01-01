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
<div class="container bg-danger">
    <h3 class="text-center text-light">View Student Details</h3>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-12">
            <table class="table table-border table-responsive text-light">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Qualification</th>
                        <th>Birthdate</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>District</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Nationality</th>
                        <th>Photo</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query="SELECT * FROM teacher_details";
                    $data=mysqli_query($conn,$query);
                    while($result=mysqli_fetch_array($data))
                    {
                        echo "<tr>
                    <td>$result[0]</td>
                    <td>$result[1]</td>
                    <td>$result[2]</td>
                    <td>$result[3]</td>
                    <td>$result[4]</td>
                    <td>$result[5]</td>
                    <td>$result[6]</td>
                    <td>$result[7]</td>
                    <td>$result[8]</td>
                    <td>$result[9]</td>
                    <td>$result[10]</td>
                    <td>$result[11]</td>
                    <td><img src='$result[12]' width='100%' height='100%'></td>
                    <td><a href='update_teacher.php?id=$result[0]&fn=$result[1]&ln=$result[2]&em=$result[3]&qualification=$result[4]&bday=$result[5]&mobile=$result[6]&gender=$result[7]&district=$result[8]&city=$result[9]&state=$result[10]&nation=$result[11]&photo=$result[12]' class='btn btn-primary' onclick='return edit()'>Edit</a></td>
                    <td><a href='delete_techer.php?id=$result[0]' class='btn btn-warning' onclick='return delete()'>Delete</a></td>
                    </tr>
                ";
            }
            ?>
            </tbody>
            </table>
    </div>
    </div>
</div>
<script>
            function edit()
            {
                return confirm('Are you Wanna Update');
            }
            function delete()
            {
                return confirm('Are you Want to delete this data');
            }
            </script>
</body>


</html>