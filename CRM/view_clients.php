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


<?php include "in/header.php"  ?>


<?php


    $Uid = $_GET['client_id'];
    $query  = "SELECT * FROM `gst_data` Where `client_id` = '$Uid'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

            $pan_number =  $row['pan_number'];
            $legal_name = ucwords($row['legal_name']);
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
            $mobile =  $row['mobile'];
            $email =  $row['email'];
            $client_id = $row['client_id'];
            $cid = $row['cid'];
            $address = $row['address'];

            
        }
    }

?>
<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>

<section id="content" style="font-family: 'Comfortaa', cursive;" >
    <main>
            <div class="container py-6 " style="max-width: 100%;font-weight:bold;">
                <div class="row ">
                    <div class="col-lg-2 ">
                        <div class="card mb-2 table_row" style="border: 1px solid white; background-color: light;">
                            <div class="card-body text-center ">
                                <img src="assests/image/image_8.png" alt="avatar" class="rounded-circle img-fluid" style="border: 2px solid white; height:80px; width:80px; margin-bottom:8px; ">
                            </div>
                            <ul class="list-group list-group-flush rounded-1 ">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="accountsClient">
                                        <label class="form-check-label" for="accountsClient" style="font-size: 14px; font-weight:bold;">
                                            Accounts Client
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="itClient">
                                        <label class="form-check-label" for="itClient" style="font-size: 14px; font-weight:bold;">
                                            IT Client
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="gstinClient">
                                        <label class="form-check-label" for="gstinClient" style="font-size: 14px; font-weight:bold;">
                                            GSTIN Client
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auditClient">
                                        <label class="form-check-label" for="auditClient" style="font-size: 14px; font-weight:bold;">
                                            Audit Client
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>




                    <div class="col-md-6 col-mb-8 ">
                        <div class="card ">
                            <div class="card-body table_row" style="font-size: 14px; padding:25px;">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Name:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0"><?php echo $legal_name; ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Father's Name:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">Chandan Singh</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Date of Birth:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">06-12-2000</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Address:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0"><?php echo $address; ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Mobile:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0"><?php echo $mobile ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Email:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0"><?php echo $email ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Aadhaar:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">3244-5441-1234</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Registration Date:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0"><?php echo  $date_of_registration ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Registration No.:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">ASDFR4567A</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-mb-12">
                        <div class="card table_row" style="margin-left: 5px;">
                            <div class="card-body" style="font-size: 14px; margin-right:4px;">
                                <h6 style="font-size:18px;font-weight:bold;text-align:center;">Contact Information</h6>
                            </div>
                            <div class="row" style="padding:5px;">
                                <div class="col-4" style="font-size:14px;margin-left:10px;">
                                    <p class="mb-0"><b>Name:</b></p>
                                </div>
                                <div class="col-7" style="font-size:14px">
                                    <p class="mb-0"><?php echo $legal_name; ?></p>
                                </div>
                            </div>

                            <div class="row" style="padding:5px;">
                                <div class="col-4" style="font-size:14px; margin-left:10px;">
                                    <p class="mb-0"><b>Mobile:</b></p>
                                </div>
                                <div class="col-6" style="font-size:14px">
                                    <p class="mb-0"><?php echo $mobile; ?></p>
                                </div>
                            </div>

                            <div class="row" style="padding:5px;">
                                <div class="col-4" style="font-size:14px;margin-left:10px;">
                                    <p class="mb-0"><b>Email:</b></p>
                                </div>
                                <div class="col-7" style="font-size:14px">
                                    <p class="mb-0"><?php echo $email; ?></p>
                                </div>
                            </div>

                            <div class="row" style="padding:5px;">
                                <div class="col-4" style="font-size:14px; margin-left:10px;">
                                    <p class="mb-0"><b>Mode of contact:</b></p>
                                </div>
                                <div class="col-6" style="font-size:14px">
                                    <p class="mb-0">Whatsapp</p>
                                </div>
                            </div>

                            <div class="row" style="padding:2px;">
                                <div class="col-4" style="font-size:14px; margin-left:10px" ;>
                                    <p class="mb-0"><b>Usual Time to contact.:</b></p>
                                </div>
                                <div class="col-6" style="font-size:14px">
                                    <p class="mb-0">9am to 10 pm</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div style="width:55%;">
                        <table class="table " style="margin: 5px; padding: 10px; ">
                            <thead class="table_row" > 
                                <tr  style="font-size: 14px;">
                                    <th>Bank Name</th>
                                    <th>Account Holder</th>
                                    <th>Account Number</th>     
                                    <th>IFSC Code</th>
                                    <th>Account Type</th>
                                </tr>
                            </thead> 
                            <tbody style="font-size:12px;" class="table_row">
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <span Style="width: 42%;" >
                        <table class="table table-light table_row" ; style="margin:4%; padding:0px;margin-top:1%;">
                            <thead>
                                <tr style="text-align:center;font-size:18px;font-weight:bold;">
                                    <td colspan="4">Related Family</td>
                                </tr>
                                <tr style="font-size: 14px;">
                                    <th>Name</th>
                                    <th>Client Type</th>
                                    <th>Registration No.</th>
                                    <th>File No.</th>
                                </tr>
                            </thead>

                            <tbody style="font-size:12px;">
                                <tr>
                                    <td>Ayush Singh</td>
                                    <td>It Client</td>
                                    <td>12345667899</td>
                                    <td>M-19</td>

                                </tr>
                                <tr>
                                    <td>Ayush Singh</td>
                                    <td>It Client</td>
                                    <td>12345667899</td>
                                    <td>M-19</td>

                                </tr>
                                <tr>
                                    <td>Ayush Singh</td>
                                    <td>It Client</td>
                                    <td>12345667899</td>
                                    <td>M-19</td>

                                </tr>
                                <tr>
                                    <td>Ayush Singh</td>
                                    <td>It Client</td>
                                    <td>12345667899</td>
                                    <td>M-19</td>

                                </tr>
                                <tr >



                                    <td  style="col-span=2">

                                        <form action="agreement.php" method="POST">
                                            <input type="text" value="<?php echo  $client_id ?>" name='client_id' hidden>
                                            <button type="submit" name="submit" style="line-height:0.8rem" class="btn btn-outline-primary">Agreement</button>
                                        </form>
                                    </td>

                                    <td >

                                        <form action="clientkyc.php" method="POST">
                                            <input type="text" value="<?php echo  $client_id ?>" name='client_id' hidden>
                                            <button type="submit" name="submit" style="line-height:0.8rem" class="btn btn-outline-danger"> KYC</button>
                                        </form>
                                    </td>


                                    <td >

                                        <form action="invoice.php" method="POST">
                                            <input type="text" value="<?php echo  $client_id ?>" name='client_id' hidden>
                                            <button type="submit" name="submit" style="line-height:0.8rem" class="btn btn-outline-danger">Invoice</button>
                                        </form>
                                    </td>

                                    <td colspan="2" style="text-align:center;">

                                        <form action="Ledgers.php" method="POST">
                                            <input type="text" value="<?php echo   $cid   ?>" name='cid' hidden>
                                            <button type="submit" name="submit" style="line-height:0.8rem" class="btn btn-outline-danger">Ledgers</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
               
                </table>
                </span>
            </div>


            </div>


            </div>
            </div>
            </div>

    </main>

</section>
<?php include "in/footer.php"  ?>