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
 logIn_access();
if (isset($_POST['days'])) {
    $_SESSION['days'] = $_POST['days'];
    header("location:view.php");
}

?>

<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">BOOK APPOINTMENT</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5 ">

    <!-- <form class="p-4 p-md-5 rounded-3" method="post">
  <h2 class="text-center">Appointment</h2>
          <div class="row">
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <select name="day" id="" class="form-control">
            <option value="" selected disabled>Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
            </select>
          </div>
          </div>
          
          <div class="col-md-6">
            <div class=" mb-2 form-group">
            <select name="time" id="" class="form-control">
            <option value="" selected disabled>Select Time</option>
                <option value="10:30am to 11:00am">10:30am to 11:00am</option>
                <option value="11:30am to 12:00pm">11:30am to 12:00pm</option>
                <option value="12:30pm to 1:00pm">12:30pm to 1:00pm</option>
                <option value="1:00 to 1:30pm">1:00 to 1:30pm</option>
                <option value="2:00pm to 2:30pm">2:00pm to 2:30pm</option>
            </select>
          </div>
          </div>
          <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
            </div>
            <div class="col-md-6">
            <div class=" mb-2 form-group">
            <input type="number" name="phone" class="form-control" placeholder="Phone Number">
          </div>
            </div>
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-2 " type="submit" name="submit" style="border-radius:32px;">Submit</button>
</form> -->

<div class="pt-4 p-5">
<div class="row">
  <div class="col-lg-4 mt-3 text-center p-3">
    <form method="post">
    <div class=" card shadow ">
      <div class="card-header"><b>MONDAY</b></div>
      <div class="class-body bg-primary text-light py-3">
        Working Days <br>
        <button type="submit" class="btn btn-light" value="MONDAY" name="days">Book</button>
      </div>
    </div>
    </form>
  </div>
  <div class="col-lg-4 mt-3 text-center p-3">
    <form method="post">
    <div class=" card shadow ">
      <div class="card-header"><b>TUESDAY</b></div>
      <div class="class-body bg-primary text-light py-3">
        Working Days <br>
        <button type="submit" class="btn btn-light" value="TUESDAY" name="days">Book</button>
      </div>
    </div>
    </form>
  </div>
  <div class="col-lg-4 mt-3 text-center p-3">
    <form method="post">
    <div class=" card shadow ">
      <div class="card-header"><b>WEDNESDAY</b></div>
      <div class="class-body bg-primary text-light py-3">
        Working Days <br>
        <button type="submit" class="btn btn-light" value="WEDNESDAY" name="days">Book</button>
      </div>
    </div>
    </form>
  </div>
  <div class="col-lg-4 mt-3 text-center p-3">
    <form method="post">
    <div class=" card shadow ">
      <div class="card-header"><b>THURSDAY</b></div>
      <div class="class-body bg-primary text-light py-3">
        Working Days <br>
        <button type="submit" class="btn btn-light" value="THURSDAY" name="days">Book</button>
      </div>
    </div>
    </form>
  </div>
  <div class="col-lg-4 mt-3 text-center p-3">
    <form method="post">
    <div class=" card shadow ">
      <div class="card-header"><b>FRIDAY</b></div>
      <div class="class-body bg-primary text-light py-3">
        Working Days <br>
        <button type="submit" class="btn btn-light" value="FRIDAY" name="days">Book</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>


    </div>
    



<script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
