<?php error_reporting(0); ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['uid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>


<?php include "in/header.php" ?>
<?php
$Uid = mysqli_real_escape_string($connection, $_GET['cid']);

// First query
$query1 = "SELECT * FROM `gst_data` WHERE `cid` = '$Uid'";
$result1 = mysqli_query($connection, $query1);
if (!$result1) {
    die('Query FAILED' . mysqli_error());
} else {
    while ($row = mysqli_fetch_assoc($result1)) {
        $pan_number = $row['pan_number'];
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
        $email = $row['email'];
        $cid = $row['cid'];

    }
}

// Second query
$query2 = "SELECT * FROM `$Uid`";
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
    die('Query FAILED' . mysqli_error());
} else {
    while ($row = mysqli_fetch_assoc($result2)) {
        $date = $row['date'];
        $unique_number = $row['unique_number'];
        $service_name = $row['service_name'];
        $service_amount = $row['service_amount'];
    }
}

$service_name = json_decode($service_name, true);

$first_service_name =$service_name[0]['name']; 
$first_service_amount = $service_name[0]['amount'];


$sec_service_name =$service_name[1]['name']; 
$sec_service_amount = $service_name[1]['amount'];

$third_service_name =$service_name[2]['name']; 
$third_service_amount = $service_name[2]['amount'];
?>





<section id="content" style="font-family: 'Comfortaa', cursive;">
    <main>
        
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
                height: 29.7cm;
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
         
         
          <form action = "invoice.php" > <li> <div> 
          
                        <button class="btn btn-outline-success" 
                        style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Back
                       </button></div>
                     </li></form>
          
          <li> <div sty> <a href="invoice.php" class="no-underline"  style="  font-size:14px; "> <button class="btn btn-outline-dark" style=" margin-left:15px; margin-top:30px;  font-size:14px; ">Invoice Form </button> </a>
        </div></li>
       
          </ul>
</section>

<body>
           
                <div class="a4-container">


                    <!-- Header -->
                    <div class="row" style="margin:1cm; width:fit-content; margin-top:5px;" id="invoice">
                        <div class="row" >
                           <u> 
                                    <h1 style=" font-size: 25px; font-weight:bold ; margin-left:260px; margin-bottom:20px;">Invoice</h1>
                                     </u>
                               <br>
                        </div>


                    <!-- Bill Details -->
                    <div class="row" >
                        <table style="border-collapse: collapse; width:100%; margin-bottom:20px;">
                            <tr>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <div class="col-xs-6">
                                        <h4 style=" font-size: 14px; font-weight:bold ">Your Company Name</h4>

                                        <p style=" font-size: 12px;">Your Company Address
                                            <br style=" font-size: 12px;"><?php echo $email; ?>
                                            <br style=" font-size: 12px;">Your Company Phone Number
                                        </p>
                                    </div>

                                </td>

                                <td style="border: 1px solid black; padding: 10px; font-size:14px; text-align:center;">
                                    <b>Invoice Date:</b> <?php echo $date ;?><br><b>Invoice
                                        Number:</b> <?php  echo $unique_number ; ?></td>
                            <tr>
                                <td style="border: 1px solid black; padding: 5px;">
                                    <div class="col-xs-6">
                                        <h4 style=" font-size: 14px; font-weight: bold ;">Customer Name</h4>

                                        <p style=" font-size: 12px;">Customer Address
                                            <br style=" font-size: 12px;">Customer Email
                                            <br style=" font-size: 12px;">Customer Phone Number
                                        </p>
                                    </div>

                                </td>
                                <td style="border: 1px solid black; padding: 10px;">QR CODE</td>
                            </tr>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th style=" font-size: 14px; font-weight: bold ;">Services</th>
                                    <th class="text-right" style=" font-size: 14px; font-weight: bold ;">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style=" font-size: 12px;"><?php echo $first_service_name ; ?></td>
                                    <td class="text-right" style=" font-size: 12px;"><?php echo $first_service_amount ; ?></td>
                                </tr>
                                <tr>
                                    <td style=" font-size: 12px;"><?php echo $sec_service_name ; ?></td>
                                    <td class="text-right" style=" font-size: 12px;"><?php echo $sec_service_amount ; ?></td>
                                </tr>
                                <tr>
                                    <td style=" font-size: 12px;"><?php echo $third_service_name ; ?></td>
                                    <td class="text-right" style=" font-size: 12px;"><?php echo $third_service_amount ; ?></td>
                                </tr>
                                <tr>
                                    <td style=" font-size: 14px; font-weight:bold;">Subtotal:</td>
                                    <td class="text-right" style=" font-size: 12px;"><?php  echo $service_amount; ?><br> E. & O.E</td>
                                </tr>

                            </tbody>
                        </table>


                        <div class="text-left" style="font-size:12px; ">
                            Total Amount Charged (in words)
                            <div style="font-size:14px; font-weight:bold;">One Thousand Rupees Only</div>

                            <div class="card" style="padding: 4%;">
                                <h>For <b style="font-size:14px;">Mukesh Jain & Co. :</b></h>
                                <p style="font-size:12px; margin-bottom:0% "><br><br>Authorised Signatory</p>
                            </div>
                        </div>

                        <div class="col" style="float:right; margin-left: 8%;">
                            <div class="card">
                                <div class="card-header" style="font-size:14px; font-weight:bold; text-align:center;">
                                    Company's Bank Details
                                </div>
                                <div class="card-body" style="padding:0.25rem;">
                                    <table style="font-size:14px;">
                                        <tr>
                                            <td style="font-weight:bold;">Bank Name:</td>
                                            <td>State Bank of India</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Account No.:</td>
                                            <td>34747447172</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Branch & IFSC Code:</td>
                                            <td>Tularam Chowk Jabalpur &amp; SBIN0001398</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>





                        <div style="margin-top:4%;">
                            <p style="font-size:13px;"><b> Declaration : </b>
                                <br style="font-size:12px;"> If you have already made payment for any particulars
                                mentioned above, please
                                let us know so we can update our accounts.
                            </p>
                        </div>
                        <div style="margin-left:30%; font-size:12px;"><b> SUBJECT TO JABALPUR JURISDICTION</b>
                            <center>Paytm not Accepted :: UPI-mjco@sbi</center>
                        </div>
                    </div>

                </div>
                </div>
                </div>
            </body>

            </html>
            <?php include "in/footer.php"  ?>
            <script>
            window.onload = function() {
                document.getElementById("download")
                    .addEventListener("click", () => {
                        const invoice = this.document.getElementById("invoice");

                        var opt = {
                            margin: 1,
                            filename: 'invoice.pdf',
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
                        html2pdf().from(invoice).set(opt).save();
                    })
            }
            </script>
     <script>
const backButton = document.getElementById("back");
backButton.addEventListener("click", function() {
  window.history.back();
});
</script>