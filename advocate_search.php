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

    <h2 class="container text-center my-3">Case Status : Search by Advocate</h2>

    <div class="services-links my-3">
            <ul>
                <li><a href="/caseno_search.php" class="btn btn-primary"><em class="fa fa-info"></em> Case Number</a></li>
                <li><a href="/cases.php" class="btn btn-primary"><em class="fa fa-list-ol"></em> FIR Number</a></li>
                <li><a href="/partyname_search.php" class="btn btn-primary"><em class="fa fa-file"></em> Party Name</a></li>
                <li><a href="/advocate_search.php" class="btn btn-primary active"><em class="fa fa-id-card"></em> Advocate Name</a></li>
                
            </ul>
        </div>

        <div class="container">
        <div class="custom-form-cntr ecourt-services-form">
                <form action="#" method="post" role="search" aria-label="Search your case" id="ecourt-services-case-status-advocate" novalidate="novalidate">
                    <p class="text-center">All fields marked with <span class="redStar"> * </span> are required</p>
                    <div class="form-row">
    <div class="first_col"> </div>
    <fieldset class="select-radiogroup">
        <legend>Please select radio button</legend>
        <div class="second_col mr-bottom5" role="radiogroup">
            <label class="radio-inpout" for="chkYes">
                <input value="courtComplex" data-view="courtComplex" type="radio" class="serviceType" id="chkYes" name="service_type" checked="">
                Court Complex            </label>
            <label class="radio-inpout" for="chkNo">
                <input value="courtEstablishment" data-view="courtEstablishment" type="radio" class="serviceType" id="chkNo" name="service_type">
                Court Establishment            </label>
        </div>
    </fieldset>
</div><div class="form-row toggle" id="courtComplex">
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

<div class="form-row toggleadv" id="advocatename">
    <div class="first_col">
        <label for="advocate_name">Advocate<span class="redStar"> * </span></label>
    </div>
    <div class="second_col">
        <input type="text" name="advocate_name" placeholder="Type advocate name" id="advocate_name" autocomplete="off">
    </div>

</div>

<div class="form-row toggleadv" id="advocatebarcode" style="display: none">
    <div class="first_col">
        <label for="advocate_state_code">Advocate Bar Code<span class="redStar"> * </span></label>
    </div>
    <div class="second_col">
        <input type="text" name="barcode[state_code]" id="advocate_state_code" placeholder="State Code" class="med-width" autocomplete="off">
        <input type="text" name="barcode[bar_code]" id="advocate_bar_code" placeholder="Barcode" class="med-width" autocomplete="off">
        <input type="text" name="barcode[year]" id="advocate_year" placeholder="Year" class="med-width" autocomplete="off">
    </div>
</div>

<div class="form-row toggleadv" id="datecase" style="display: none">
    <div class="first_col">
        <label for="date">Case List Date<span class="redStar"> * </span></label>
    </div>
    <div class="second_col">
        <div id="myDatepicker" class="wai-datepicker">
            <div class="date">
            <input readonly="" type="text" class="datepicker-input" placeholder="dd-mm-yy" id="advocate_date" name="advocate_date" aria-autocomplete="none" autocomplete="off">
            <button type="button" class="icon" aria-label="Choose Date"> <span class="fa fa-calendar fa-2x"><span class="hide">Calendar</span></span></button>
        </div>
            <div id="id-datepicker-1" class="datepickerDialog" role="dialog" aria-modal="true" aria-labelledby="id-dialog-label">
            <div class="header">
                <button type="button" class="prevYear" aria-label="previous year"> <span class="fa fa-angle-double-left fa-lg"><span class="hide">Previous Year</span></span></button>
                <button type="button" class="prevMonth" aria-label="previous month"> <span class="fa fa-angle-left fa-lg"><span class="hide">Previous Month</span></span></button>
                <h2 id="id-dialog-label" class="monthYear" aria-live="polite">October 2023</h2>
                <button type="button" class="nextMonth" aria-label="next month"> <span class="fa fa-angle-right fa-lg"><span class="hide">Next Month</span></span></button>
                <button type="button" class="nextYear" aria-label="next year"> <span class="fa fa-angle-double-right fa-lg"><span class="hide">Next Year</span></span></button>
            </div>
            <table id="myDatepickerGrid" class="dates" role="grid" aria-labelledby="id-dialog-label">
                <thead>
                <tr>
                    <th scope="col" abbr="Sunday">Su</th>
                    <th scope="col" abbr="Monday">Mo</th>
                    <th scope="col" abbr="Tuesday">Tu</th>
                    <th scope="col" abbr="Wednesday">We</th>
                    <th scope="col" abbr="Thursday">Th</th>
                    <th scope="col" abbr="Friday">Fr</th>
                    <th scope="col" abbr="Saturday">Sa</th>
                </tr>
                </thead>
                <tbody><tr class="dateRow"><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-01">1</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-02">2</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-03">3</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-04">4</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-05">5</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-06">6</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-07">7</button></td></tr><tr class="dateRow"><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-08">8</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-9">9</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-10">10</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-11">11</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-12">12</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-13">13</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-14">14</button></td></tr><tr class="dateRow"><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-15">15</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-16">16</button></td><td class="dateCell"><button class="dateButton" tabindex="0" data-date="2023-10-17">17</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-18">18</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-19">19</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-20">20</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-21">21</button></td></tr><tr class="dateRow"><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-22">22</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-23">23</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-24">24</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-25">25</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-26">26</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-27">27</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-28">28</button></td></tr><tr class="dateRow"><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-29">29</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-30">30</button></td><td class="dateCell"><button class="dateButton" tabindex="-1" data-date="2023-10-31">31</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-01">1</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-02">2</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-03">3</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-04">4</button></td></tr><tr class="dateRow" style="visibility: hidden;"><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-05">5</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-06">6</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-07">7</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-08">8</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-9">9</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-10">10</button></td><td class="dateCell"><button class="dateButton disabled" tabindex="-1" data-date="2023-11-11">11</button></td></tr></tbody>
            </table>
            <div class="dialogButtonGroup">
                <button class="dialogButton" value="cancel">Cancel</button>
                <button class="dialogButton" value="ok">OK</button>
            </div>
            <div class="message" aria-live="polite">Test</div>
        </div>
        </div>
    </div>
</div><div class="form-row toggleadv" id="pend_disp_row">
    <div class="first_col"> </div>
    <fieldset class="select-radiogroup">
        <legend>Please select radio button</legend>
        <div class="second_col mr-bottom5" role="radiogroup">
            <label class="radio-inpout" for="chkYesStatus">
                <input type="radio" id="chkYesStatus" name="case_status" value="P" checked="">Pending            </label>
            <label class="radio-inpout" for="chkNoStatus">
                <input type="radio" id="chkNoStatus" name="case_status" value="D">Disposed            </label>
                    
                    </div>
    </fieldset>
</div>
<div class="form-row mr-none">
    <div class="first_col"> </div>
    <div class="second_col">
        <input type="submit" value="Search" name="submit" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>
</div>                    <input type="hidden" name="es_ajax_request" value="1">
                </form>
              <!-- <div class="disclaimer text-justify">
                   <p><strong>Disclaimer: </strong>Please note that the data and information related to "Case Status, Court Order, Cause List and Caveat Search" is dynamically sourced using APIs from eCourts System. This website developed using S3WaaS Framework will have no clue for any inaccuracies or delays in fetching the queried/requested data on this site. Therefore, S3WaaS explicitly disclaim for any responsibility or liability for any damage or loss that may arise from the direct or indirect use of the information provided for eCourts Services. </p>
                   <p>If you have any questions or feedback, please reach out to the eCourts Services Support Team at support.dcourt[at]nic[dot]in.</p>
               </div>-->
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
