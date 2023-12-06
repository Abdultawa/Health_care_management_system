<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<style>
    h1 {
        padding-top: 6rem;
        /* font-family: sans-serif; */
        font-weight: 900;
        font-size: 40px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<?php include("patientNav.php");
 include("../functions.php");
 include("../database.php");
 login($connection);
?>

<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">APPOINTMENT RECORD</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5 ">
    <div class="card">
        <div class="card-header">
            <h2 class="text-primary text-center">My Appointment</h2>
        </div>
        <div class="container">
  <div class="card-body">
<?php  
$user_id = $_SESSION["user_id"];
$sql_select  = "SELECT * FROM book WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $sql_select); 

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
   
                $_SESSION['day'] = $row['day'];
                $_SESSION['time'] = $row['time'];
                $_SESSION['status'] = $row['status'];
?>
 <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">day</th>
      <th scope="col">Time</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['day']; ?></td>
      <td><?php echo $_SESSION['time']; ?></td>
      <td><?php echo $_SESSION['status']; ?></td>
    </tr>
  </tbody>
</table>
<?php
}
?>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>