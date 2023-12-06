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

    <?php include("docNav.php"); ?>
    <header class=" bg-body-tertiary overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class=" col-xl-10 offset-xl-1 ">
                    <h1 class="text-center">DOCTOR DASHBOARD</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="row container m-5 ">
        <div class=" col-lg-4">
            <a href="manageApt.php" class="link">
                <div class="card text-primary text-center">
                    <div class="card-header">
                        Manage Appointment
                    </div>
                    <div class="card-body">
                        View User Appointment
                    </div>
                </div>
            </a>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>