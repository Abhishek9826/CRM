<?php error_reporting(0); ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['cid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>


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
            
        }
    }
}
?>


<section id="content" style="font-family: 'Comfortaa', cursive;">
    <main>
        <section style=" font-family: 'Comfortaa', cursive;">

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
                padding: 1cm;
                /* Add some padding for better readability */
                box-sizing: border-box;
                /* Include padding and border in container size */
                border: 1px solid black;
                /* Add a border for visualization purposes */
                background: #fff;
            }
            </style>
<section id="sidebar" style= "font-family: Comfortaa, cursive; ">
    <div class="sidebar_top">
        
  

   <ul> <div> <button class="btn btn-outline-primary" id="download"
                        style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Download
                        PDF</button></div>
                        <li> <div> <button class="btn btn-outline-danger"
                        style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Date
                       </button></div>
          </li>
          <li> <div> <button class="btn btn-outline-success" id="back"
                        style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Back
                       </button></div>
          </li>

          </ul>
</section>

            <body>
               
                 <div class="a4-container">


                    <!-- Header -->
                    <div class="row" style="margin:1cm; width:fit-content; " id="agreement">
                        <div class="row">
                            <u>
                                <h1 style=" font-size: 25px; font-weight:bold ; margin-left:180px;">Service Agreement
                                </h1>
                            </u>
                            <br>
                        </div>




                        <!-- Bill Details -->


                        <p style="font-size:12px; margin-top:10px;">THIS SERVICES AGREEMENT (the “Agreement”) is dated
                            this <?php echo date("d-m-y"); ?>

                            Between <b>Mukesh Jain & Co. (MJCO)</b>and <b><?php echo $business_name ?> </b>
                            operating
                            business under GSTIN: <?php echo $gstin ?>.


                            <br><br>In consideration of the matters described above and of the mutual benefits and
                            obligation set
                            forth in this agreement, the receipt and sufficiency of which consideration is hereby
                            acknowledged, the
                            Client and MJCO (individually the “Party” and collectively the “Parties” to this Agreement)
                            agree as
                            follow:

                        </p>

                        <h6 style="font-weight:bold; font-size:14px;">Services Provided</h6>
                        <div>
                            <p style="font-size:12px;"> The Client hereby agrees to engage MJCO to provide the Client
                                with the following services (the
                                “Services”):

                                <br>1. Monthly computerized accounting.
                                <br>2. Filing of GST Returns on GST Common Portal on behalf of the “Client”.
                                <br>3. Preparation of the final account for every financial year of the “term” If
                                required.
                                <br>4. Filing of Income Tax Return of the “Client” as per the “Agreement” if required.
                                <br>5. Filing of TDS return on behalf of the “Client” if required.
                            </p>
                        </div>
                        <div>
                            <h6 style="font-weight:bold; font-size:14px;">Terms of Agreement</h6>

                            <p style="font-size:12px;"> The term of this agreement (the “Term”) will begin on the date
                                of this agreement and will remain
                                in full force and effect until terminated with the written consent of the Parties.
                            </p>


                            <h6 style="font-weight:bold; font-size:14px;"> Performance</h6>

                            <p style="font-size:12px;"> The parties agree to do necessary to ensure that the terms of
                                this Agreement take effect.</p>
                        </div>
                        <h6 style="font-weight:bold; font-size:14px;">Reimbursement Of Expenses</h6>
                        <div>
                            <p style="font-size:12px;"> MJCO will be reimbursed within 30 days from the date of payment
                                of any kind of duties and taxes paid by MJCO in connection with providing the “Services”
                                to the “Client”.
                            </p>
                        </div>

                        <h6 style="font-weight:bold; font-size:14px;">Payment</h6>
                        <p style="font-size:12px;"> MJCO will charge the Client a fee as mentioned below in the fee
                            structure section.
                            <br>The Client will be invoiced once every year for yearly services and when the services
                            are
                            complete in case of other services.
                            <br><br> In the event that this Agreement is terminated by the Client in the middle of any
                            financial
                            year, MJCO will be entitled to pro rata payment of the Payment to the date of termination
                            provided that
                            there is no breach of contract on the part of MJCO.
                            <br> <br>The payment as stated in this Agreement does not include GST, or other applicable
                            duties as may
                            be required by law. Any GST and duties required by law will be charged to the Client in
                            addition to the
                            Payment.
                        </p>
                        <div>



                            <h6 style="font-weight:bold; font-size:14px;">Fee Structure</h6>


                            <table style="font-size:12px; width:135%;text-align:center;">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid black; padding: 5px;">Particulars</th>
                                        <th style="border: 1px solid black; padding: 5px;">Turnover</th>
                                        <th style="border: 1px solid black; padding: 5px;">Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">0-50 Lacs</td>
                                        <td style="border: 1px solid black; padding: 2px;">1000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">51 Lacs - 1 Cr</td>
                                        <td style="border: 1px solid black; padding: 2px;">2000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">1 - 2 Cr</td>
                                        <td style="border: 1px solid black; padding: 2px;">3000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">2 - 3 Cr</td>
                                        <td style="border: 1px solid black; padding: 2px;">4000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">3 - 4 Cr</td>
                                        <td style="border: 1px solid black; padding: 2px;">5000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Computerized Accounting</td>
                                        <td style="border: 1px solid black; padding: 2px;">4 - 5 Cr</td>
                                        <td style="border: 1px solid black; padding: 2px;">6000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">GST Returns</td>
                                        <td style="border: 1px solid black; padding: 2px;">-</td>
                                        <td style="border: 1px solid black; padding: 2px;">1000 / Month</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 2px;">Income Tax Return</td>
                                        <td style="border: 1px solid black; padding: 2px;">-</td>
                                        <td style="border: 1px solid black; padding: 2px;">2000-10000 / Year</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="font-weight:bold; margin-top:25px; font-size:12px;">GST Returns Include : GSTR-1,
                            GSTR-3B, GSTR-9.</div>
                        <p style="font-size:12px;">All Other GST Returns not mentioned below will be charged separately.
                        </p>

                        <div>
                            <h6 style="font-size:14px; font-weight:bold;">Additional Services not Charged :</h6>
                            <ul style="list-style-type: disc;">
                                <ul style="font-size:12px;"><b> GST Reconciliation - </b></ul>
                                <li style="font-size:12px;">GSTR-2B To GSTR-3B</li>
                                <li style="font-size:12px;">GSTR-3B To GSTR-2A</li>
                                <li style="font-size:12px;">GSTR-3B To GSTR-1</li>
                                <li style="font-size:12px;"> Books to GSTR-3B</li>
                                <li style="font-size:12px;">Books To GSTR-1</li>
                                <li style="font-size:12px;">Books To GSTR-2A</li>
                            </ul>
                            </ul>



                            <h6 style="font-weight:bold; font-size:14px;">Return OF Property</h6>
                            <div>
                                <p style="font-size:12px;"> Upon termination of this Agreement, MJCO will return to the
                                    Client any property, documentation, records, or Confidential Information which is
                                    the property of the Client.
                                </p>
                            </div>

                            <h6 style="font-weight:bold; font-size:14px;">Capacity / Independent Services Provider</h6>
                            <div>
                                <p style="font-size:12px;"> In providing the services under this “Agreement” it is
                                    expressly agreed that MJCO acts as an independent services provider and not as an
                                    employee. MJCO and the Client acknowledge that this Agreement does not create a
                                    partnership or joint venture between them, and is exclusively a contract for
                                    services.
                                </p>

                                <p style="font-size:12px;"> In witness whereof the Parties have duly affixed their
                                   
                                    signature under hands and seal on this   31-05-2023
                                </p>
                            </div>
                            <br><br>
                            <div class="text-left" style="font-size:12px; ">
                                <div class="row">


                                    <b>For MJCO</b>
                                    <div style="margin-left:450px;">
                                        <b> For Nayak Mobile</b>
                                        <br>Jayanti Nayak
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

            </html>

            <script>
            window.onload = function() {
                document.getElementById("download")
                    .addEventListener("click", () => {
                        const agreement = this.document.getElementById("agreement");

                        var opt = {
                            margin: 1,
                            filename: 'agreement.pdf',
                            image: {
                                type: 'jpeg',
                                quality: 0.98
                            },
                            html2canvas: {
                                scale: 2
                            },
                            jsPDF: {
                                unit: 'in',
                                format: 'letter',
                                orientation: 'portrait'
                            }
                        };
                        html2pdf().from(agreement).set(opt).save();
                    })
            }
            </script>
             <script>
const backButton = document.getElementById("back");
backButton.addEventListener("click", function() {
  window.history.back();
});
</script>
