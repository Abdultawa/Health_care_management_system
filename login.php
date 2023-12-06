
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">LOGIN PAGE</h1>
                </div>
            </div>
        </div>
    </header>
<div class="col-md-10 mx-auto col-lg-5 mt-4 ">
<form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post">
          <div class="form-floating mb-3">
            <input type="text"name="uname" class="form-control" id="floatingInput" placeholder="username">
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password"name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="login"  style="border-radius:32px;">Login</button>
          <hr class="my-4">
          
          <p class="text-center text-primary-emphasis ">I don't have an account.<a href="register.php">Register</a></p>
        </form>
</div>
<center>
<a href="doctor/docLogin.php" class="btn btn-light text-info  btn-outline-info mt-3" type="submit">Doctor Login</a>
</center>
        <script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<?php
include("functions.php");
include("database.php");
login($connection);

        ?>
</body>
</html>