<?php error_reporting(0); ?>


<?php include "in/header.php" ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['uid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];





?>


<?php

if (isset($_POST['cid'])) {
    $Uid1 = $_POST['cid'];
    $query = "Select * FROM $Uid1";
    $result = mysqli_query($connection, $query);
}

?>

<?php
// $sql = "SELECT service_amount FROM $Uid1 ORDER BY id DESC LIMIT 1 OFFSET 1";
// $result = mysqli_query($connection, $sql);
$bal = 0.00;
?>

<style>

td, th {
  border: none;
  padding: 8px;
  text-align: left;
}
</style>
<?php include "in/navbar.php" ?>

<section id="content">
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
    <h4><?php echo  $Uid1; ?></h4>
    <main>

        <div class="page-content-wrapper-inner table_row" >

            <div class="table-responsive">
                <table class="table table_row" >
                    <thead>
                        <tr>

                            <th>Date</th>
                            <th>Particulars</th>

                            <th>Invoice No.</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                                foreach ($result as $key => $value) {

                                ?>
                        <tr style="font-size: 12px ; align-items: left;">
                            <small>

                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <?php echo $value['date']  ?>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                  
                                        <div class="table">
                                            <?php $val = $value['service_name'];

$val =   json_decode($val, true);
?>
<table style="border-collapse: collapse;">
  <tr>
    <td sytle="border: none;" ><?php echo $val[0]['name']; ?></td>
    <td sytle="border: none;"><?php echo $val[0]['amount']; ?></td>
  </tr>
  <tr>
    <td><?php echo $val[1]['name']; ?></td>
    <td><?php echo $val[1]['amount']; ?></td>
  </tr>
  <tr>
    <td><?php echo $val[2]['name']; ?></td>
    <td><?php echo $val[2]['amount']; ?></td>
  </tr>
</table>


<?php


?>

                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                           <?php echo $value['unique_number'] ?>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <?php echo $value['service_amount'] ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <?php echo $value['credit']?>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="row">
                                        <div class="col">
                                          <?php
                                                $cradit = $value['credit'];
                                                $val = $value['service_amount'];
                                                $bal = $val + $bal - $cradit;
                                                echo  $bal;

                                                ?>
                                        </div>
                                    </div>
                                </td>

                            </small>
                            <td></td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
 
        </div>

        </div>


    </main>

</section>


<?php include "in/footer.php"  ?>

<script>
const backButton = document.getElementById("back");
backButton.addEventListener("click", function() {
    window.history.back();
});
</script>