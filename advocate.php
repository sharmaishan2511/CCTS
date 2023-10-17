<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - Advocate Inforamation</title>

    <link rel="shortcut icon" href="/images/seci.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom/style.css">

</head>
<body class="custom-background">
    <?php
        include('navigation.php')
    ?>

    <div class="container my-4">
        <h3>Advocate Information</h3>
        
        <!-- Search Advocate by Name -->
        <form class="row">
            <div class="row col-md-4">
                <input type="text" class="form-control" placeholder="Type Advocate Name" aria-label="First name">
            </div>
            <div class="col auto">
                <button type="button" class="btn btn-primary">Search</button>
            </div>
            
        </form>

        <!-- Advocate Information Section -->
        <div class="advocate-info my-4">
            
            <p><strong>Full Name:</strong></p>
            <p><strong>Specialty:</strong></p>
            <p><strong>Experience:</strong></p>
        </div>
        
        <!-- Add more advocate details here as needed -->
    </div>
</div>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="/jquery.js"></script>
    <script src="/custom/script.js"></script>
</body>
</html>