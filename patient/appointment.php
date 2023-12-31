<?php
 session_start();
// logIn_access();
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
//  login($connection);
 $data = fetch_user_appointment($connection);

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
    <div class="container" style="margin-top: -10vh;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header"><b>MANAGE APPOINTMENT</b></div>
                            <div class="card-body">
                                    <table class="table table-bordered table-striped" >

                                        <thead style="padding: -50px;">
                                            <tr style="padding: -50px;">
                                                <th>ID</th>
                                                <th>APPOINTMENT DAY</th>
                                                <th>TIME</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <?php 
                                                $counter =1;
                    if(mysqli_num_rows($data)>0){
                        while($row = mysqli_fetch_assoc($data)){
                         ?>
                                                <td><?php echo $counter++ ?></td>
                                                <td><?php echo $row['day_id'] ?></td>
                                                <td><?php echo $row['appoint_time'] ?></td>
                                                <td><?php if ($row['status']=="approved") {
                                    // code...
                                    ?>
                                    <button class="btn btn-success" disabled>Approved</button>
                                    <?php
                                        }else{ ?><button class="btn btn-warning">Pending</button>
                                    <?php } ?></td>
                                            </tr>
                                        <?php }} ?>
                                           
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> 
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>