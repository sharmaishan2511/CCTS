<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTS - Case Search</title>
    <link rel="shortcut icon" href="/images/seci.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom/style.css">

</head>
<body class="custom-background">
    <?php
        include('navigation.php');
    ?>

    <h2 class="container text-center my-3">Case Status : Search by FIR Number</h2>

    <div class="services-links my-3">
            <ul>
                <li><a href="/caseno_search.php" class="btn btn-primary "><em class="fa fa-info"></em> Case Number</a></li>
                <li><a href="/cases.php" class="btn btn-primary active "><em class="fa fa-list-ol"></em> FIR Number</a></li>
                <li><a href="/partyname_search.php" class="btn btn-primary "><em class="fa fa-file"></em> Party Name</a></li>
                <li><a href="/advocate_search.php" class="btn btn-primary"><em class="fa fa-id-card"></em> Advocate Name</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="custom-form-cntr ecourt-services-form">
                        <form action="#" method="post" role="search" aria-label="Search your case" id="ecourt-services-case-status-fir-number" novalidate="novalidate">
                            <p class="text-center">All fields marked with <span class="redStar"> * </span> are required</p>
                            
            <div class="form-row toggle" id="courtComplex">
                <div class="first_col">
                    <label for="est_code">Court Complex <span class="redStar"> * </span></label>
                </div>
                <div class="second_col">
                    <select name="est_code" class="est_code" id="est_code">
                        <option value="">Select Court Complex</option>
                        <option value="HRGR01,HRGR02,HRGR03">District Court, Gurugram</option>
                        <option value="HRGRA0,HRGRA1">Judicial Complex, Sohna</option>
                        <option value="HRGRB0,HRGRB1">Judicial Complex, Pataudi</option>
                    </select>
                </div>
            </div>

            <div class="form-row toggle" id="courtEstablishment" style="display: none">
                <div class="first_col">
                    <label for="court_establishment">Court Establishment <span class="redStar"> * </span></label>
                </div>
                <div class="second_col">
                    <select name="est_code" class="est_code" id="court_establishment">
                        <option value="">--Select Court Establishment--</option>
                        <option value="HRGR01">District and Sessions Court, Gurgram</option>
                        <option value="HRGR02">Civil Judge Senior Division, Gurugram</option>
                        <option value="HRGR03">Chief Judicial Magistrate, Gurugram</option>
                        <option value="HRGRA0">Civil Judge Senior Division, Taluka Court, Sohna</option>
                        <option value="HRGRA1">Chief Judicial Magistrate, Taluka Court, Sohna</option>
                        <option value="HRGRB0">Civil Judge Senior Division, Taluka Court, Pataudi</option>
                        <option value="HRGRB1">Chief Judicial Magistrate, Taluka Court, Pataudi</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="first_col">
                    <label for="fir_no">FIR Number </label>
                </div>
                <div class="second_col">
                    <input type="text" name="fir_no" id="fir_no" placeholder="Type Fir Number" class="med-width" autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="first_col">
                    <label for="reg_year">Year </label>
                </div>
                <div class="second_col">
                    <input type="text" name="reg_year" id="reg_year" class="med-width" placeholder="Type year" autocomplete="off">
                </div>
            </div>
            <div class="form-row toggleadv" id="pend_disp_row">
                <div class="first_col"> </div>
                <fieldset class="select-radiogroup">
                    <legend>Please select radio button</legend>
                    <div class="second_col mr-bottom5" role="radiogroup">
                        <label class="radio-inpout" for="chkYesStatus">
                        <input type="radio" id="chkYesStatus" name="case_status" value="P" checked="">Pending            </label>
                        
                        <label class="radio-inpout" for="chkNoStatus">
                        <input type="radio" id="chkNoStatus" name="case_status" value="D">Disposed            </label>
                        
                        <label class="radio-inpout" for="chkBothStatus">
                        <input type="radio" id="chkBothStatus" name="case_status" value="B">Both                </label>
                    </div>
                </fieldset>
            </div>
            <div class="form-row mr-none">
                <div class="first_col"> </div>
                <div class="second_col">
                    <input type="submit" value="Search" name="submit" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </div>                    
                <input type="hidden" name="es_ajax_request" value="1">
                </form>
            </div>
        </div>

    <div class="container my-3">
        <div class="form">
            <div class="row bg-light px-3 py-4">
                <div class="col-md-3">
                    <label for="court" class="form-label">Court:</label>
                    <select class="form-select form-select-sm" id="court">
                        <option value="Supreme Court">Supreme Court</option>
                        <option value="Delhi High Court">Delhi High Court</option>
                        <option value="Delhi High Court">Andhra High Court</option>
                        <option value="Delhi High Court">APTEL</option>
                        <option value="Delhi High Court">CERC</option>
                        <option value="Delhi High Court">DERC</option>
                        <option value="Delhi High Court">PSERC</option>
                        <option value="Delhi High Court">RERC</option>
                        <option value="Delhi High Court">JERC</option>
                        <option value="Delhi High Court">OERC</option>
                        
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="department" class="form-label">Department:</label>
                    <select class="form-select form-select-sm" id="department">
                        <option value="civil">Civil Cases</option>
                        <option value="arbitration">Arbitration Cases</option>
                        <option value="power">Power Sector and Regulatory Cases</option>
                        <option value="labour">Labour and Services Cases</option>
                        <option value="contract">Contractual Cases</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="fromDate" class="form-label">From Date:</label>
                    <input type="date" class="form-control form-control-sm" id="fromDate">
                </div>
                <div class="col-md-3">
                    <label for="toDate" class="form-label">To Date:</label>
                    <input type="date" class="form-control form-control-sm" id="toDate">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success mx-2 my-4" id="filterButton">Filter</button>
                    <a href="/createcase.php" class="btn btn-primary">Add Case +</a>
                </div>
                
            </div>
        </div>
    </div>


    <div class="container my-3">
        <h3>Results</h3>
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

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="/jquery.js"></script>
    <script src="/custom/script.js"></script>
    
</body>
</html>
