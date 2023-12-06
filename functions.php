<?php

function login( $dbconn){
    if(isset($_POST['login'])){
        //get user's input
        $uname = $_POST['uname']; 
        $pass = $_POST['password'];
    
        $sql = "SELECT * FROM Register WHERE uname='$uname'";
        $result = mysqli_query($dbconn, $sql); 

    
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row["password"];
    
            if (password_verify($pass, $hashed_password)) {
                // Password is correct, log the user in
                session_start();
                $_SESSION["user_id"] = $row["Id"];
                $_SESSION['fullname'] = $row['fullName'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['uname'] = $row['uname'];
                header("Location:patient/dashboard.php"); // Redirect to the dashboard or any other page
                exit();
            } else {
                echo"<script> alert('Invalid password');</script>";
            }
        } else {
            echo"<script> alert('User not found.');</script>";
        }
    mysqli_close($dbconn);
    
    }
    
}

function register($dbconn){
    if (isset($_POST['register'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpass = $_POST['cpassword'];
      
        if ($password !== $cpass) {
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      
            // Inserting hashed password into the database
            $sql = "INSERT INTO `Register` (`fullName`, `email`, `uname`, `phone`, `password`) VALUES ('$name', '$email', '$uname', '$phone', '$hashed_password')";
            $result = mysqli_query($dbconn, $sql);
      
            if ($result) {
                echo "<script>alert('Registration successful');</script>";
                
            } else {
                echo "<script>alert('Registration failed');</script>";
            }
        }
      }
}

function book($dbconn){
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $day = $_POST['day'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $user_id = $_SESSION['user_id'];
    
        // Assuming $connection is your database connection
    
        // Perform the SQL insertion
        $sql = "INSERT INTO `book` (`name`,`day`, `time`, `phone`, `user_id`) VALUES ('$name','$day', '$time', '$phone', '$user_id')";
        $result = mysqli_query($dbconn, $sql);
    
        // Check if the insertion was successful
        if (!$result) {
            header("Location: dashboard.php");
            exit();
        } else {
            // If insertion failed, display a JavaScript alert with the error message
            echo "<script>alert('Booked successful');</script>";
        }
    }
      }


function docLogin( $dbconn){
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check user credentials
    $sql = "SELECT * FROM `Admin` WHERE `userName`='$username' AND `role` = 'Admin' AND `password`='$password'";
    $result = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // $row = mysqli_fetch_assoc($result);
        // $password = $row["password"];
        $_SESSION['user'] = ['role' => 'Admin'];
        header("Location: dashboard.php");
        exit();
        } else {
            echo "<script>alert('Invalid username or password.');</script>";
            header("Location: ../index.php");
        }
    }

    
}
