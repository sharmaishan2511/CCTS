<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - Cases</title>

    <link rel="shortcut icon" href="/images/seci.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom/style.css">
</head>
<body class="custom-background">
    <?php
        include('navigation.php');
    ?>

    <div class="container d-flex flex-row justify-content-between">
        <div>
            <h2 class = "my-3">Cases</h2>
        </div>
        <div class="my-3">
            <a href="/createcase.php" class="btn btn-primary">Add Case +</a>
        </div>
    </div>

    <div class="container form">
        <div class="row bg-light px-3 py-4">
            <h4>Search by Date</h4>
            <div class="col">
                <label for="date" class="form-label">From Date : </label>
                <input type="date" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label for="date" class="form-label">To Date : </label>
                <input type="date" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col">
                <button type="button" class="btn btn-success mx-2 my-4">Search</button>
                <button type="button" class="btn btn-danger mx-2 my-4">Clear</button>
            </div>
        </div>
    </div>
    
    <div class="container d-flex flex-row justify-content-evenly">
        <div class="container form my-4">
            <div class="row bg-light px-3 py-4">
                <h4>Search by Case Number</h4>
                <div class="col-md-6">
                    <label for="caseno" class="form-label">Case Number</label>
                    <input type="text" class="form-control form-control-sm" id="caseno">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success mx-2 my-4">Search</button>
                </div>
            </div>
        </div>

        <div class="container form my-4">
            <div class="row bg-light px-3 py-4">
                <h4>Search by Advocate</h4>
                <div class="col-md-6">
                    <label for="caseno" class="form-label">Advocate Name</label>
                    <input type="text" class="form-control form-control-sm" id="caseno">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success mx-2 my-4">Search</button>
                </div>
            </div>
        </div>
    </div>



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



</body>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="/jquery.js"></script>
    <script src="/custom/script.js"></script>
    
</html>