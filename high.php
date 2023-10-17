<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - High Court</title>
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
        <h2>Supreme Court</h2>
        <div class="form">
            <div class="row bg-light px-3 py-4">
                <div class="col-md-3">
                    <label for="court" class="form-label">Subject Matter : </label>
                    <select class="form-select form-select-sm" id="court">
                        <option value="">WP under Article 226</option>
                        <option value="">Civil Appeal before the High Court</option>
                        <option value="">Injunctions on Bank Guarantee</option>
                        <option value="">Caveats</option>
                        <option value="">Miscellaneous Petitions</option>
                        <option value="">Interim Relief Application</option>  
                        <option value="">Interlocutory Application</option>  
                        <option value="">Miscellaneous Applications</option>  
                        <option value="">Review Petition</option>  
                    </select>
                </div>
            </div>
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