<?php session_start();
include("../functions.php");
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

<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">MANAGE APPOINTMENT</h1>
                </div>
            </div>
        </div>
    </header>
<?php
include("../database.php");
include("docNav.php");
$sql = "SELECT * FROM appointment INNER JOIN Register ON Register.Id = appointment.user_id";
$result = mysqli_query($connection, $sql);

if ($result->num_rows > 0) { 
?>
 <div class="container mt-5 ">
    <div class="card">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Time</th>
      <th scope="col">Day</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = $result->fetch_assoc()) {
        ?>
    <tr>
      <td><?php echo $row['fullName'] ?></td>
      <td><?php echo $row['appoint_time'] ?></td>
      <td><?php echo $row['day_id'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td>
      <form action="" method="post">
                <input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id']; ?>">
                <input type="submit" name="approve" value="Approve" class="btn btn-success text-white">
            </form>
    </td>
    </tr>
  </tbody>
  <?php
}
 ?>
</table>

<?php
    }
?>


<?php
if (isset($_POST["approve"])) {
    $appointment_id = $_POST['appointment_id'];
    $sql = "UPDATE appointment SET `status` = 'approved' WHERE appointment_id = '$appointment_id'";
    $result = mysqli_query($connection, $sql);
    if($result){
        header("location:manageApt.php");
    }
}
?>
</body>
</html>