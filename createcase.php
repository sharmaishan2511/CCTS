<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - Add Case</title>

    <link rel="shortcut icon" href="/images/seci.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom/style.css">
</head>
<body class="custom-background"> 
    <?php
        include('navigation.php')
    ?>

    <div class="container d-flex flex-row">
        <div>
            <h2 class = "my-3">Add Case</h2>
        </div>
    </div>

    <div class="container bg-light my-3 py-3 px-3">
        <h3>Client details</h3>
        <form class="row g-3">
            <div class="d-flex flex-row">
                <div class="col-md-6">
                    <label for="inputclientname" class="form-label">Name</label>
                    <input type="email" class="form-control form-control-sm" id="inputclient">
                </div>

                <div class="d-flex flex-row justify-content-between">
                    <div class="form-check my-4 mx-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Petitioner
                        </label>
                    </div>
                        <div class="form-check my-4 mx-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Respondent
                        </label>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-md-6">
                <label for="inputresname" class="form-label">Respondent/Petitioner Name</label>
                <input type="text" class="form-control form-control-sm" id="inputresname">
            </div>
            <div class="col-md-6">
                <label for="inputresadv" class="form-label">Respondent/Petitioner Advocate</label>
                <input type="text" class="form-control form-control-sm" id="inputresadv">
            </div>
            <h3>Case Details</h3>
            <div class="col-md-4">
                <label for="caseno" class="form-label">Case Number</label>
                <input type="text" class="form-control form-control-sm" id="caseno">
            </div>
            <div class="col-md-4">
                <label for="casetype" class="form-label">Case Type</label>
                <input type="text" class="form-control form-control-sm" id="casetype">
            </div>
            <div class="col-md-4">
                <label for="casesub" class="form-label">Case Subtype</label>
                <input type="text" class="form-control form-control-sm" id="casesub">
            </div>

            <div class="col-md-6">
                <label for="casesub" class="form-label">Stage of Case</label>
                <input type="text" class="form-control form-control-sm" id="casesub">
            </div>
            <div class="col-md-6">
                <label for="filedate" class="form-label">Filing Date</label>
                <input type="date" class="form-control form-control-sm" id="filedate">
            </div>
            <div class="col">
                <label for="desc" class="form-label">Description</label>
                <textarea type="text" class="form-control form-control-sm" id="desc"></textarea>
            </div>
            
            <h3>Forum Details</h3>
            <div class="col-md-6">
                <label for="courtno" class="form-label">Forum Name</label>
                <input type="text" class="form-control form-control-sm" id="courtno">
            </div>
            <div class="col-md-6">
                <label for="courtno" class="form-label">Forum Number</label>
                <input type="text" class="form-control form-control-sm" id="courtno">
            </div>
            <div class="col-md-6">
                <label for="courttype" class="form-label">Filing Number</label>
                <input type="text" class="form-control form-control-sm" id="courttype">
            </div>
            <div class="col-md-6">
                <label for="court" class="form-label">Court</label>
                <input type="text" class="form-control form-control-sm" id="court">
            </div>

            <div class="col-md-6">
                <label for="judge" class="form-label">Name of Judge</label>
                <input type="text" class="form-control form-control-sm" id="judge">
            </div>
            <div class="col-md-6">
                <label for="remark" class="form-label">Remark</label>
                <textarea type="date" class="form-control form-control-sm" id="remark"></textarea>
            </div>

            <h3>Task Assign</h3>
            <div class="col-md-6">
                <label for="user" class="form-label">Name of Case Handling Officer</label>
                <input type="text" class="form-control form-control-sm" id="user">
            </div>
            <div class="col-md-6">
                <label for="user" class="form-label">Name of Advocate</label>
                <input type="text" class="form-control form-control-sm" id="user">
            </div>
            <div class="col-md-6">
                <label for="user" class="form-label">Advocate Fees</label>
                <input type="number" class="form-control form-control-sm" id="user">
            </div>
            <div class="col-md-6">
                <label for="user" class="form-label">Subject matter of the Case</label>
                <input type="text" class="form-control form-control-sm" id="user">
            </div>
            <div class="col-md-6">
                <label for="user" class="form-label">Category of Advocate</label>
                <input type="text" class="form-control form-control-sm" id="user">
            </div>

            
            <button type="button" class="btn btn-success mx-2 my-4">Save</button>
            
        </form>
    </div>
    

</body>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="/jquery.js"></script>
    <script src="/custom/script.js"></script>
</html>