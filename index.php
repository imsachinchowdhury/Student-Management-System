<?php
include("connection.php");
error_reporting(0);
session_start();
?>

<html>
<head>
    <title>Student Management system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function content1()
    {
        document.querySelector("#div1").style.display="block";
        document.querySelector("#div2").style.display="none";
    }
    function content2()
    {
        document.querySelector("#div1").style.display="none";
        document.querySelector("#div2").style.display="block";
    }
</script>

<style>
    #fbrd{
        border-radius:5px;
    }
</style>

</head>
<body>
    <br>
    <section>
        <center><p><font size="5" color="red"><b>Student Management System</b></font></p></center>
        <div class="container bg-danger">
        <center><p ><font size="5" color="white"><b>Admin Login</b></font></p></center>
        <!--row start-->
        <div class="row" >
            <div class="col-md-7 col-sm-7 col-12">
                <img src="students.jpg" width="100%" height="100%"> 
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                    <button class="btn btn-info" onclick="content1()">Register</button>
                    <button class="btn btn-info"  onclick="content2()">Login</button>
                    <br><br>
                    <div id="div1" style="display:block">
                    <form action="" method="POST">
                                <label><font color="white">Name</font></label>
                                <input type="text" name="name" placeholder="Enter your full name" class="form-control" id="fbrd" >
                                <br>
                                <label><font color="white">Email</font></label>
                                <input type="email" name="email" placeholder="Enter your email" class="form-control" id="fbrd" >
                                <br>
                                <label><font color="white">Password</font></label>
                                <input type="Password" name="password" placeholder="Enter your password" class="form-control"  id="fbrd">
                                <br>
                                <label><font color="white">Confirm Password</font></label>
                                <input type="Password" name="cpassword" placeholder="Re-Enter your password" class="form-control" id="fbrd">
                                <br>
                                <center><input type="submit" name="submit" value="Register" class="btn btn-primary"></center>
                    </form>
                    </div>
                    <div id="div2" style="display:none">
                    <form action="" method="POST">
                                <label><font color="white">Email</font></label>
                                <input type="email" name="email" placeholder="Enter your email" class="form-control" id="fbrd">
                                <br>
                                <label><font color="white">Password</font></label>
                                <input type="Password" name="password" placeholder="Enter your password" class="form-control"  id="fbrd">
                                <br>
                                <center><input type="submit" name="login" value="Login" class="btn btn-primary"></center>
                    </form>
                    </div>
            </div>
         </div>
         <!--row start-->
        </div>
    </section>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $query="SELECT * FROM register WHERE email='$email'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total>0)
    {
        echo "<script>alert('Email Id Alrady Register Please try Another Email')</script>";
    }
    else if($password!=$cpassword)
    {
        echo "<script>alert('Password And Conform Password Don't match')</script>";

    }
    else if($total==0)
    {
        $query1="INSERT INTO register(name,email,password,cpassword) VALUES ('$name','$email','$password','$cpassword')";
        $data1=mysqli_query($conn,$query1);
        if($data1)
        {
            echo "<script>alert('Successfull Register')</script>";
        }
        else
        {
            echo "<script>alert('Data Not Inserted Into Database')</script>";
        }

    }
}


?>
<?php


if(isset($_POST['login']))
{
    $email =$_POST['email'];
    $password =$_POST['password'];
    $query="SELECT * FROM register WHERE email='$email' && password='$password'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    echo $total;
    if($total==1)
    {
        $_SESSION['username']=$email;
        echo "<script>
        window.location='http://localhost/student_management_system/main.php';
        </script>";
    }
    else
    {
        echo "<script>
        window.location='index.php';
        </script>";
    }
}
?>
