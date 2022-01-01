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
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$class=$_GET['class'];
$em=$_GET['em'];
$fatnm=$_GET['fatnm'];
$bday=$_GET['bday'];
$mobile=$_GET['mobile'];
$gender=$_GET['gender'];
$district=$_GET['district'];
$city=$_GET['city'];
$state=$_GET['state'];
$nation=$_GET['nation'];
$photo=$_GET['photo'];


?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
<title>Add Student Detail</title>
<style>
    #row{
        border-radius:5px;
    }
</style>
</head>

<body>
    <center><h3>Update Student Detail</h3></center>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row bg-danger" id="row">
                <div class="col-md-5 col-sm-5 col-12 m-auto">
                   <label><font size="4"color="white">First name</font></label>
                    <input type="text" name="fname" value="<?php echo $fn ?>" class="form-control" palceholder="Enter your First name">
                    <br>
                    <label><font size="4"color="white">Class</font></label>
                    <input type="text" name="class" value="<?php echo $class ?>" class="form-control" palceholder="Enter your Class">
                    <br>
                    <label><font size="4"color="white">Roll</font></label>
                    <input type="text" name="id" value="<?php echo $id ?>" class="form-control" palceholder="Enter your ID">
                    <br>
                    <label><font size="4"color="white">Email</font></label>
                    <input type="email" name="email" value="<?php echo $em ?>" class="form-control" palceholder="Enter your Email">
                    <br>
                    <label><font size="4"color="white">Father name</font></label>
                    <input type="text" name="fathername" value="<?php echo $fatnm ?>" class="form-control" palceholder="Enter your Father name">
                    <br>
                    <label><font size="4"color="white">Gender : </font></label>&nbsp
                    Male &nbsp<input type="radio" name="r" value="Male">

                    Female &nbsp<input type="radio" name="r" value="Female">
                    </br>
                    <label><font size="4"color="white">City</font></label>
                    <input type="text" name="city" value="<?php echo $city ?>" class="form-control" palceholder="Enter your City">
                    <br>
                    <label><font size="4"color="white">Nationality</font></label>
                    <input type="text" name="nationality" value="<?php echo $nation ?>" class="form-control" palceholder="Enter your Namtionality">
                   <br>
                   <input  type="submit" name="submit" value="submit">

                </div>

                <div class="col-md-5 col-sm-5 col-12">
               <label><font size="4"color="white">Last name</font></label>
                <input type="text" name="lname" value="<?php echo $ln ?>"class="form-control" palceholder="Enter your Lastst name">
                <br>
                <label><font size="4"color="white">Birth Date</font></label>
                <input type="date" name="birthdate" value="<?php echo $bday ?>" class="form-control" palceholder="Enter your Birth Date">
                <br>
                <label><font size="4"color="white">Mobile</font></label>
                <input type="text" name="mobile" value="<?php echo $mobile ?>" class="form-control" palceholder="Enter your Mobile Number">
                <br>
                <label><font size="4"color="white">District</font></label>
                <input type="text" name="district" value="<?php echo $district ?>" class="form-control" palceholder="Enter your District">
                <br>
                <label><font size="4"color="white">State</font></label>
                <input type="text" name="state" value="<?php echo $state ?>" class="form-control" palceholder="Enter your State">
                <br>
                <label><font size="4"color="white">Student Photo</font></label>
                <input type="file" name="username" class="form-control">
                
                </div>
                
            </div>
          
        </form>
    </div>


    <?php
        if(isset($_POST['submit']))
        {

            $fname=$_POST['fname'];
            $id=$_POST['id'];
            $lname=$_POST['lname'];
            $class=$_POST['class'];
            $email=$_POST['email'];
            $fathername=$_POST['fathername'];
            $birthdate=$_POST['birthdate'];
            $gender=$_POST['r'];
            $city=$_POST['city'];
            $district=$_POST['district'];
            $nationality=$_POST['nationality'];
            $state=$_POST['state'];
            $mobile=$_POST['mobile'];
            $filename=$_FILES['username']['name'];
            $tempname=$_FILES['username']['tmp_name'];
            $folder="images/".$filename;
            move_uploaded_file($tempname,$folder);
            
            echo $mobile;
            
            if($filename!="")
            {
                
                $query="UPDATE student_detail SET id='$id',fname='$fname',lname='$lname',class='$class',email='$email',father_name='$fathername',birthdate='$birthdate',mobile='$mobile',gender='$gender',district='$district',city='$city',state='$state',nation='$nationality',photo='$folder' WHERE id='$id'";
                
                $data=mysqli_query($conn,$query);
                if($data)
                {
                    
                    echo "<script>alert('Data Insert Into Database')</script>";
                    ?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0 URL='http://localhost/student_management_system/viewstudent.php'">
                    <?php
                }
                else
                {
                    echo "<script>alert('Data not Insert Into Database')</script>";
                }
            }
            else
            {
                echo "Not Insert";
            }
        }
        ?>
</body>
</html>
