<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['cnum'];
        $address = $_POST['address'];
        $gmail = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {

            $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
            else
            {
            echo "<script type='text/javascript'> alert('Please Enter some valid information')</script>";
            }


    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label> 
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="cnum" required>
            <label>Address</label> 
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label> 
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br> 
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a> 
        </p> 
        <p>Already have an account? <a href="login.php">login here</a></p>
    </div>
</body>
</html>