<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' limit 1"; 
            $result = mysqli_query($con, $query);

            if ($result)
            {
                if ($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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
    <div class="login">
    <h1>Login</h1>
    <h4>It's free and only takes a minute</h4>
    <form method="POST">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="Submit">
    </form>
    <p>Not have an account? <a href="signup.php">Sign Up here</a></p>
</body>