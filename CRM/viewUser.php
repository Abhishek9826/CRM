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
if (isset($_POST['submit'])) {
  $Uid = $_POST['uid'];
  $query  = "SELECT * FROM `users` Where `uid` = '$Uid'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query FAILED' . mysqli_error());
  } else {

    while ($row = mysqli_fetch_assoc($result)) {
      $first_name =  $row['f_name'];
      $mid_name = $row['m_name'];
      $last_name = $row['l_name'];
      $user_email =  $row['email'];
      $user_mobile =  $row['mobile'];
      $user_role =  $row['role'];
      $user_image =  $row['image'];
      $user_gender =  $row['gender'];
      $user_pan =  $row['pan'];
      $user_aadhar =  $row['aadhhar'];
      $user_dist =  $row['dist'];
      $user_vtc =  $row['vtc'];
      $user_subdist =  $row['subdist'];
      $user_street =  $row['street'];
      $user_state =  $row['state'];
      $user_po =  $row['po'];
      $user_pc =  $row['pc'];
      $user_loc =  $row['loc'];
      $user_landmark =  $row['landmark'];
      $user_house =  $row['house'];
      $user_country =  $row['country'];
      $user_careof =  $row['careof'];
      $user_dob =  $row['dob'];
      $cid = $row['uid'];


      $address = $user_house . " " . $user_street . " " . $user_landmark . " " . $user_po . " " . $user_state . " " . $user_country . " (" . $user_pc . ") ";
    }
  }
}
?>

<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>





<section id="content">
  <main>


    <section style=" font-family: 'Comfortaa', cursive;">
      <div class="container py-2">
        <div class="row ">
          <div class="col-lg-2.5 ">
            <div class="card mb-2 table_row" >
              <div class="card-body text-center table_row">
                <img src="<?php echo $user_image  ?>" alt="avatar" class="rounded-circle img-fluid " style="border: 2px solid white; height:80px; width:80px;">
                <h6 class="my-1" style="font-size: 16px;"><b><?php echo $first_name . " " . $last_name; ?></b></h6>
                <p class="text-muted mb-2"><b style="color:darkblue"><?php echo "$user_role"  ?></b></p>
                <div class="d-flex justify-content-center mb-2">
                  <p style="font-size: 12px">Attendance :- 90%</p>
                </div>
              </div>
            </div>
            <div class="card mb-8 mb-lg-0 table_row" >
              <div class="card-body p-1 table_row ">
                <ul class="list-group list-group-flush rounded-1 table_row">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                    <p style="font-size: 12px;">GSTR-3B (CM) - </p>
                    <p style="font-size: 12px;">33/360</p>
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                    <p style="font-size: 12px;">GSTR-1 (CM) - </p>
                    <p style="font-size: 12px;"> 33/360</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                    <p style="font-size: 12px;">GSTR-3B (FY) - </p>
                    <p style="font-size: 12px;">33/360</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                    <p style="font-size: 12px;">GSTR-1 (FY) - </p>
                    <p style="font-size: 12px;">33/360</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 ">
            <div class="card mb-1 ">

              <div class="card-body table_row" style="font-size: 14px; ">
                <div class="row " style="height:40px;">

                  <div class="col-sm-3 table_row" style="margin-top:15px;">
                    <p class="mb-0"><b>Date Of Birth</b></p>
                  </div>
                  <div class="col-sm-5 table_row" style="width:fit-content; margin-top:15px;">
                    <span>
                      <p class=" mb-0"><?php echo "$user_dob"    ?></p>
                    </span>
                  </div>
                  <form action="deleteFunction.php" method="post" style="width:fit-content; margin-left:20%; margin-bottom:15%;">
                    <input type="text" name="function" hidden value="delete">
                    <input type="text" name="id" hidden value="<?php echo $cid  ?>">
                    <button type="submit" name="submit" value="submit" class="btn btn-outline-danger btn-xs" style="line-height: 0.8rem; margin-right: 5%" data-id=".$cid ">Delete</button>
                  </form>
                </div>
                <!-- <hr class="table_row" style="margin-top:0.2rem; margin-bottom:0.2rem; border:0; border-top: 1px solid rgba(0,0,0,.1);"> -->
                <div class="row">
                  <div class="col-sm-3 table_row">
                    <p class="mb-0"><b>Email</b></p>
                  </div>
                  <div class="col-sm-9 table_row">
                    <p class=" mb-0"> <?php echo "$user_email"  ?></p>
                  </div>
                </div>
                <!-- <hr class="table_row" style="margin-top:0.2rem; margin-bottom: 0.2rem; border: 2; border-top: 1px solid rgba(0,0,0,.1);"> -->
                <div class="row">
                  <div class="col-sm-3 table_row">
                    <p class="mb-0"><b>Phone</b></p>
                  </div>
                  <div class="col-sm-9 table_row">
                    <p class=" mb-0"><?php echo " $user_mobile"  ?></p>
                  </div>
                </div>
                <!-- <hr class="table_row" style="margin-top:0.2rem; margin-bottom: 0.2rem; border: 2; border-top: 1px solid rgba(0,0,0,.1);"> -->
                <div class="row">
                  <div class="col-sm-3 table_row">
                    <p class="mb-0"><b>Aadhar Number</b></p>
                  </div>
                  <div class="col-sm-9 table_row">
                    <p class=" mb-0"><?php echo " $user_aadhar"  ?></p>
                  </div>
                </div>
                <!-- <hr class="table_row" style="margin-top:0.2rem; margin-bottom: 0.2rem; border: 2; border-top: 1px solid rgba(0,0,0,.1);"> -->
                <div class="row">
                  <div class="col-sm-3 table_row">
                    <p class="mb-0"><b>Address</b></p>
                  </div>
                  <div class="col-sm-9 table_row">
                    <p class="mb-0"><?php echo "$address";  ?></p>
                  </div>
                </div>

                <!-- <hr class="table_row" style="margin-top:0.2rem; margin-bottom: 0.2rem; border: 2; border-top: 1px solid rgba(0,0,0,.1);"> -->
                <div class="row">
                  <div class="col-sm-3 table_row">
                    <p class="mb-0"><b>PAN card</b></p>
                  </div>
                  <div class="col-sm-9 table_row">
                    <p class="mb-0"><?php echo "$user_pan"  ?></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="page-content-wrapper-inner">
              <div class="col-lg">
                <div class="grid">
                  <div class="item-wrapper">
                    <div class="table_row">
                      <table class="table table_row" style="font-size: 16px;">
                        <thead>
                          <tr>
                            <th>Clients List</th>
                            <th>Clients Detail</th>
                            <th>Clients GST Status</th>
                            <div>

                            </div>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- this is for php Code -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>


    </section>

  </main>

</section>


<?php include "in/footer.php"  ?>