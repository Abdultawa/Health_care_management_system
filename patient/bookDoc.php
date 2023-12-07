<?php session_start()?>
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
<?php
// approve_query($connection);

include("patientNav.php");
include("../database.php");
include("../functions.php");

 $data = fatch_record("appointment", "appointment_id", $_SESSION['btn_view'],$connection);
 $row = mysqli_fetch_assoc($data);
?>
<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">APPOINTMENT</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container" style="margin-top: -10vh;">
                <form method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header"><b>MANAGE APPOINTMENT</b></div>
                            <div class="card-body">
                                    <table class="table table-bordered table-striped" >

                                        <thead style="padding: -50px;">
                                            <tr style="padding: -50px;">
                                                <th>APPOINTMENT DAY</th>
                                                <td><?php echo $row['day_id'] ?></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>AVAILABLE TIME</th>
                                                <td><?php echo $row['appoint_time'] ?></td>
                                            </tr>
                                             <tr>
                                                <th>BOOKING STATUS</th>
                                                <td>Available</td>
                                            </tr>

                                        </tbody>

                                    </table>
                                     <button class="btn btn-success col-sm-7" name="book" type="submit">Book this now</button>
                                            
                                     <?php send_appointment();?>
                                   
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </form>
            </div> <!-- end of container -->
        </div> <!-- 