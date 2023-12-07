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
include("patientNav.php");
include("../database.php");
include("../functions.php");

 $data = fatch_record("appointment", "day_id", $_SESSION['days'],$connection);
 if (isset($_POST['btn_view'])) {
    $_SESSION['btn_view'] = $_POST['btn_view'];
    header("location:bookDoc.php");
}
?>

<header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">BOOK DOCTOR</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

    <form  method="post">
        <div class="row">
        <?php 
                    if(mysqli_num_rows($data)>0){
                        while($row = mysqli_fetch_assoc($data)){
                         ?>
                   <div class="col-lg-4 mt-2 text-center ">
                        <div class="card shadow">
                            <div class="card-header"><b><?php echo $_SESSION['days']  ?></b></div>
                            <div class="card-body">
                                  <?php echo $row['appoint_time'] ?> <br>
                                <?php if ($row['status']=="booked") {
                                    // code...
                                    ?>
                                    <button class="btn btn-warning" disabled>Booked</button>
                                    <?php
                                }else{ ?><button class="btn btn-primary" name="btn_view" value="<?php echo $row['appointment_id'] ?>">Schedule appointment</button>
                            <?php } ?>
                            </div>
                            <div class="card-footer ">
                                 <?php if ($row['status']=="booked") {
                                    // code...
                                    ?>
                                    
                                     <label class="text-danger">Unavailable</label>
                                    <?php
                                }else{ ?>
                                Available
                            <?php } ?>
                               
                            </div>
                        </div>
                    </div>
                     <?php }}else{

                    ?></div>
                     <div class="alert alert-warning">
                        Doctor is not Available, pls check back later!
                     </div>  
                     <?php  } 
                     
                    
                     ?>                 
                    <div class="col-xl-10 offset-xl-1">
                </div> <!-- end of col -->
            </div> 
        </form> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->



    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
