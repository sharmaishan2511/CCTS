<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - Dashboard</title>
    <link rel="shortcut icon" href="/images/seci.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom/style.css">
</head>
<body class="custom-background">
    <?php
        include('navigation.php')
    ?>

    <div class="d-flex flex-row my-5 justify-content-evenly">
        <div class="card bg-info text-white clickable-div" style="width: 25rem; cursor:pointer" data-href="/departments/civil.php">
            <div class="d-flex flex-row">
                <div class="card-body">
                    <h2 class="card-title">894</h2>
                    Civil Cases
                </div>
                <div class="fa-stack fa-4x hourglass-spin whl my-3 mx-2" style="color: white;">
                    <i class="fa fa-stack-1x fa-hourglass-start"></i>
                    <i class="fa fa-stack-1x fa-hourglass-half"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end spin"></i>
                </div>
            </div>
        </div>
        <div class="card bg-warning clickable-div1" style="width: 25rem;cursor:pointer" data-href="/departments/finance.php">
            <div class="d-flex flex-row">
                <div class="card-body text-white">
                    <h2 class="card-title">145</h2>
                    Finance Cases
                </div>
                <!-- <div class="fa-stack fa-4x hourglass-spin whl my-3 mx-2" style="color: white;" >
                    <i class="fa fa-stack-1x fa-hourglass-start"></i>
                    <i class="fa fa-stack-1x fa-hourglass-half"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end spin"></i>
                </div> -->
                <div class = "mx-2 my-4">
                    <i class="fa fa-solid fa-money-bill" style="color: #ffffff; font-size: 70px;"></i>
                </div>

            </div>
        </div>
        <div class="card bg-success clickable-div2" style="width: 25rem;cursor:pointer" data-href="/departments/power.php">
            <div class="d-flex flex-row">
                <div class="card-body text-white">
                    <h2 class="card-title" id=>782</h2>
                    Power Cases
                </div>
                <!-- <div class="fa-stack fa-4x hourglass-spin whl my-3 mx-2" style="color: white;">
                    <i class="fa fa-stack-1x fa-hourglass-start"></i>
                    <i class="fa fa-stack-1x fa-hourglass-half"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end spin"></i>
                </div> -->
                <div class = "mx-2 my-4">
                    <i class="fa fa-solid fa-solar-panel fa-fade" style="color: #ffffff; font-size: 70px;"></i>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-evenly">
        <div class="card bg-primary clickable-div3" style="width: 25rem;cursor:pointer" data-href="/departments/power.php">
            <div class="d-flex flex-row">
                <div class="card-body text-white">
                    <h2 class="card-title">223</h2>
                    Power and Reglatory Cases
                </div>
                <!-- <div class="fa-stack fa-4x hourglass-spin whl my-3 mx-2" style="color: white;">
                    <i class="fa fa-stack-1x fa-hourglass-start"></i>
                    <i class="fa fa-stack-1x fa-hourglass-half"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end spin"></i>
                </div> -->
                <div class = "mx-2 my-4">
                    <i class="fa fa-solid fa-solar-panel fa-fade" style="color: #ffffff; font-size: 70px;"></i>
                </div>
            </div>
        </div>
        <div class="card bg-secondary clickable-div4" style="width: 25rem;cursor:pointer" data-href="/departments/arbitration.php">
            <div class="d-flex flex-row ">
                <div class="card-body text-white">
                    <h2 class="card-title">1092</h2>
                    Arbitration Cases
                </div>
                <!-- <div class="fa-stack fa-4x hourglass-spin whl my-3 mx-2" style="color: white;">
                    <i class="fa fa-stack-1x fa-hourglass-start"></i>
                    <i class="fa fa-stack-1x fa-hourglass-half"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end"></i>
                    <i class="fa fa-stack-1x fa-hourglass-end spin"></i>
                </div> -->
                <div class = "mx-2 my-4">
                    <i class="fa fa-sharp fa-solid fa-gavel fa-lg" style="color: #ffffff; font-size: 80px;"></i>
                </div>
            </div>
        </div>
        <div class="card bg-danger clickable-div5" style="width: 25rem;cursor:pointer"  data-href="/departments/labour.php">
            <div class="d-flex flex-row ">
                <div class="card-body text-white">
                    <h2 class="card-title">901</h2>
                    Labour and Services Cases
                </div>
                <div class = "mx-2 my-4">
                    <i class="fa fa-regular fa-calendar" style="color: #ffffff; font-size: 70px;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-row justify-content-evenly my-5">
        <div class="card px-3" style="width: 12rem;">
            <h6 style="text-align: center;">Today's Cases</h6>
            <div class="pie animate no-round" style="--p:100;--b:5px;--c:orange;">225</div>
        </div>
        <div class="card px-3" style="width: 12rem;">
            <h6 style="text-align: center;">Today's Disposal</h6>
            <div class="pie animate no-round" style="--p:100;--b:5px;--c:red;">311</div>
        </div>
        <div class="card px-3" style="width: 12rem;">
            <h6 style="text-align: center;">Today's Case Board</h6>
            <div class="pie animate no-round" style="--p:100;--b:5px;--c:blue;">21</div>
        </div>
        <div class="card px-3" style="width: 12rem;">
            <h6 style="text-align: center;">Today's Judgement Upload</h6>
            <div class="pie animate no-round" style="--p:100;--b:5px;--c:green;">123</div>
        </div>
    </div>

    <div class="container justify-content-center my-5">
        <div class="card" style="width: 65rem;">
            <div class="card-body">
                <h5 class="card-title">Manage Your Case</h5>
                <p class="card-text">Maintain Complete case History like case number,case </p>
                <a href="/createcase.php" class="btn btn-primary">Add Case +</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <h3>Recents</h3>
        <div class="container table-responsive-sm my-5">
            <table class="table table-bordered table-striped align-middle">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Case</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="activityList">
                        
                </tbody>
            </table>
        </div>
    </div>


    <footer style="background-color: black; color:azure;">
        Footer Content
    </footer>
    

</body>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="/jquery.js"></script>
    <script src="/custom/script.js"></script>


</html>