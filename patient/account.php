<?php session_start(); // Ensure session_start() is called at the beginning of the file
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    h1 {
        padding-top: 6rem;
        /* font-family: sans-serif; */
        font-weight: 900;
        font-size: 40px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <?php include("patientNav.php")?>
    <header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">MY PROFILE</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5 ">
    <div class="card">
        <div class="card-header">
            <h2 class="text-primary text-center">MY PROFILE</h2>
        </div>
        <div class="container">
  <div class="card-body">
  <?php
// include("./login.php");
include("../functions.php");
include("../database.php");
login($connection);
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php"); // Redirect if not logged in
    exit();
}

?>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><b>Patient Name</b></td>
                        <td><?php echo $_SESSION['fullname']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Email Address</b></td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Phone Number</b></td>
                        <td><?php echo $_SESSION['phone']; ?></td>
                    </tr>
                    <tr>
                        <td><b>User Name</b></td>
                        <td><?php echo $_SESSION['uname']; ?></td>
                    </tr>
                </tbody>
            </table>
<?php
?>


  </div>
</div>
</div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>