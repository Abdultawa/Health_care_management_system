<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">REGISTER PAGE</h1>
                </div>
            </div>
        </div>
    </header>
<div class="container w-50 m-auto bg-body-secondary mt-5 ">
<form class="p-4 p-md-5 rounded-3" method="post">
  <h2 class="text-center">User Sign-up</h2>
          <div class=" mb-2">
            <input type="text"name="fullname" class="form-control" placeholder="Fullname">
          </div>
          <div class=" mb-2">
            <input type="email"name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="text" name="uname" class="form-control" placeholder="username">
          </div>
          </div>
          
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
          </div>
            </div>
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password">
          </div>
            </div>
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="password" name="cpassword" class="form-control" placeholder="confirm password">
          </div>
            </div>
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-2 " type="submit" name="register" style="border-radius:32px;">Sign Up</button>
          <p class="text-center text-primary-emphasis mt-2 "> Already have account.<a href="login.php">Login</a></p>
</form>

</div>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<?php
include("database.php");
include("functions.php");
register($connection);



?>
</body>
</html>