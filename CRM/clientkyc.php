<?php include "in/header.php" ?>

<?php

if (isset($_POST['submit'])) {
    $Uid = $_POST['client_id'];

    $query  = "SELECT * FROM `gst_data` Where `client_id` = '$Uid'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

            $pan_number =  $row['pan_number'];
            $legal_name = $row['legal_name'];
            $center_jurisdiction = $row['center_jurisdiction'];
            $state_jurisdiction = $row['state_jurisdiction'];
            $date_of_registration = $row['date_of_registration'];
            $constitution_of_business = $row['constitution_of_business'];
            $taxpayer_type = $row['taxpayer_type'];
            $gstin_status = $row['gstin_status'];
            $date_of_cancellation = $row['date_of_cancellation'];
            $field_visit_conducted = $row['field_visit_conducted'];
            $nature_of_core_business_activity_code = $row['nature_of_core_business_activity_code'];
            $nature_of_core_business_activity_description = $row['nature_of_core_business_activity_description'];
            $aadhaar_validation = $row['aadhaar_validation'];
            $aadhaar_validation_date = $row['aadhaar_validation_date'];
            $gstin = $row['gstin'];
            $address = $row['address'];
            $uid = $row['uid'];
$business_name = $row['business_name'];
$address = $row['address'];
            
        }
    }
}

?>
<?php
 $query1  = "SELECT * FROM `users` Where `uid` = '$uid'";
 $result1 = mysqli_query($connection, $query1);
 if (!$result1) {
     die('Query FAILED' . mysqli_error());
 } else {
     while ($row1 = mysqli_fetch_assoc($result1)) {

       $employee = $row1['f_name'];
         
     }
 }


?>
<style>
body {
    font-family: Comfortaa;
    background-color: #f2f2f2;
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #ccc;
    font-weight: bold;
    text-align: center;
}

.a4-container {
    width: 21cm;
    /* A4 width */
    height: 60 cm;
    /* A4 height */
    margin: auto;
    /* Center the container horizontally */
    padding: 0.7cm;
    /* Add some padding for better readability */
    box-sizing: border-box;
    /* Include padding and border in container size */
    border: 1px solid black;
    /* Add a border for visualization purposes */
    background: #fff;
}

</style>

<section id="content" style="font-family: 'Comfortaa', cursive;">
    <main>
        <section id="sidebar" style="font-family: Comfortaa, cursive; ">
            <div class="sidebar_top">

                <ul>
                    <div> <button class="btn btn-outline-primary" id="download"
                            style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Download
                            PDF</button></div>
                    <li>
                        <div> <button class="btn btn-outline-danger"
                                style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Date
                            </button></div>
                    </li>
                    <li>
                        <div> <button class="btn btn-outline-success" id="back"
                                style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Back
                            </button></div>
                    </li>

                </ul>
        </section>

        <body>

            <div class="a4-container">
                <!-- Header -->
                <div class="row" style="margin:1cm; width:fit-content; margin-top:5px;" id="clientkyc">
                    <div class="row">
                        <u>
                            <h1 style=" font-size: 25px; font-weight:bold ; margin-left:280px;">Client KYC</h1>
                        </u>
                        <br>
                    </div>

                    <div class="row" style="margin-top:20px;" id="clientkyc">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo $legal_name; ?>" alt="Your Image" class="img-fluid"
                                        style="margin-left:10px;">
                                </div>
                                <h4 style="font-size: 14px; font-weight:bold; text-align: center ;margin-top:20px;">
                                    Services Provided
                                </h4>

                                <div class="form-check" style="margin-left:25px;">
                                    <input class="form-check-input" type="checkbox" value="" id="accountsClient">
                                    <label class="form-check-label" for="accountsClient" style="font-size: 12px; ">
                                        Accounts Client
                                    </label>
                                </div>

                                <div class="form-check" style="margin-left:25px;">
                                    <input class="form-check-input" type="checkbox" value="" id="itClient">
                                    <label class="form-check-label" for="itClient" style="font-size: 12px; ">
                                        IT Client
                                    </label>
                                </div>

                            </div>


                        </div>

                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    Personal Information
                                </div>
                                <div class="card-body">
                                    <p>Name: <?php echo $legal_name ; ?>
                                        <br>Mobile: <?php   ?>
                                        <br>Email: <?php   ?>
                                        <br>DOB: <?php   ?>
                                        <br>Address: <?php echo $address; ?>
                                        <br>PAN: <?php echo $pan_number; ?>
                                        <br>Aadhaar: 3042 5241 4152
                                        <br>Employee: <?php echo  $employee; ?>
                                        <br>Date of Registration: <?php echo $date_of_registration; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-top:-178px;">
                            <div class="card">
                                <div class="card-header">
                                    Other Information
                                </div>
                                <div class="card-body">
                                    <p>Bank Name: State Bank of India
                                        <br>Account Number: 1234567890

                                        <br>IFSC Code: SBIN0006789
                                        <br>Related Family: Chandan Singh,
                                        Prity Singh, Ayush Singh,
                                    </p>
                                    <div class="col-md-2" style="margin-top:45px;">

                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=<?php echo $Uid; ?>"
                                                alt="<?php echo $Uid; ?>" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7" style=" margin-top:-25px;">
                            <div class="card">
                                <div class="card-header">
                                    Business Details
                                </div>
                                <div class="card-body">
                                    <p>Trade Name: <?php echo $business_name; ?>
                                        <br>GSTIN No.: <?php echo $gstin; ?>
                                        <br>GST File No.: M-12
                                        <br>IT File No.: M-200
                                        <br>Business Address: <?php echo $address; ?>
                                        <br>GSTIN Login ID: 415263
                                        <br>IT Login ID: 748596
                                    </p>
                                </div>
                                <div class="card">
                                    <div id="card-body" 
                                    style = "font-family: 'Libre Barcode 128 Text', cursive;">
                                   <link href= "https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=swap">
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
            </body>
</section>

</html>
<script>
window.onload = function() {
    document.getElementById("download")
        .addEventListener("click", () => {
            const clientkyc = this.document.getElementById("clientkyc");

            var opt = {
                margin: 1,
                filename: 'clientkyc.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true
                   
               
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
              
            };

            html2pdf().from(clientkyc).set(opt).save();
        })
}
</script>
<script>
const backButton = document.getElementById("back");
backButton.addEventListener("click", function() {
    window.history.back();
});
</script>