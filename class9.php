<?php
include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
<body>
    <div class="container">
    <center><h1>This is Class 9 All Student Details</h1></center>
    <table class="table table-responsive bg-warning">
        <thead>
            <tr>
                <td>Full Name</td>
                <td>Last Name</td>
                <td>Class</td>
                <td>Email</td>
                <td>Father Name</td>
                <td>D.O.B</td>
                <td>Mobile</td>
                <td>Gender</td>
                <td>District</td>
                <td>City</td>
                <td>State</td>
                <td>Nation</td>
                <td>Photo</td>
                <td colspan="2">Operation</td>
            </tr>
            <?php
                $class="9";
                $query="SELECT * FROM student_detail Where class=$class";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);
                
                if($total>0)
                {
                    while($result=mysqli_fetch_array($data))
                    {
                        echo "<tr>
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
                        <td>$result[12]</td>
                        <td><img src='$result[13]' width='100px' height='100px'></td>
                        <td><a href='update_student.php?id=$result[0]&fn=$result[1]&ln=$result[2]&class=$result[3]&em=$result[4]&fatnm=$result[5]&bday=$result[6]&mobile=$result[7]&gender=$result[8]&district=$result[9]&city=$result[10]&state=$result[11]&nation=$result[12]&photo=$result[13]' class='btn btn-primary' onclick='return edit()'>Edit</a></td>
                        <td><a href='delete_student.php?id=$result[0]' class='btn btn-warning' onclick='delete()'>Delete</a></td>
                        
                        </tr>";
                    }

                }
                else
                {
                    echo "<script>alert('Database is Empty')</script>";
                }
            ?>
        </thead>
    </table>
    </div>
    <script>
        function delete()
        {
            return confirm('Are you want to delete this data');
        }
    </script>
</body>
</html>
