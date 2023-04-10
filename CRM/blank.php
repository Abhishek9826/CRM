<?php include "in/header.php" ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['uid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];



$query  = "SELECT * FROM `gstr-1` where `Dec` = 'F'";
$result = mysqli_query($connection, $query);
$result = mysqli_num_rows($result);


$query1  = "SELECT * FROM `gstr-1` where `Dec` = 'N'";
$result1 = mysqli_query($connection, $query1);
$result1 = mysqli_num_rows($result1);



$query2  = "SELECT * FROM `gstr-1` where `Dec` = 'P'";
$result2 = mysqli_query($connection, $query2);
$result2 = mysqli_num_rows($result2);




$query4 = "SELECT * FROM `gstr-1` ";
$result4 = mysqli_query($connection, $query4);
$result4 = mysqli_num_rows($result4);


$tobefilled =  $result4 - $result1;


$persentage = round(($result / $tobefilled) * 100);
// $persentage=30;





$query_3b  = "SELECT * FROM `gstr3b` where `Dec` = 'F'";
$result_3b = mysqli_query($connection, $query_3b);
$result_3b = mysqli_num_rows($result_3b);


$query_3b1  = "SELECT * FROM `gstr3b` where `Dec` = 'N'";
$result_3b1 = mysqli_query($connection, $query_3b1);
$result_3b1 = mysqli_num_rows($result_3b1);



$query_3b2  = "SELECT * FROM `gstr3b` where `Dec` = 'P'";
$result_3b2 = mysqli_query($connection, $query_3b2);
$result_3b2 = mysqli_num_rows($result_3b2);




$query_3b4 = "SELECT * FROM `gstr3b`";
$result_3b4 = mysqli_query($connection, $query_3b4);
$result_3b4 = mysqli_num_rows($result_3b4);


$tobefilled_3b =  $result_3b4 - $result_3b1;


$persentage_3b = round(($result_3b / $tobefilled_3b) * 100);





// year count

	$cnt_FR1 = "SELECT* FROM `gstr-1` WHERE `Apr` = 'F'";
	$result_FR1 = mysqli_query($connection, $cnt_FR1);
$result_FR1 = mysqli_num_rows($result_FR1);


	$cnt_FR2 = "SELECT * FROM `gstr-1` WHERE  `May` = 'F' ";
	$result_FR2 = mysqli_query($connection, $cnt_FR2);
$result_FR2 = mysqli_num_rows($result_FR2);

	$cnt_FR3 = "SELECT * FROM `gstr-1` WHERE  `Jun` = 'F'";
	$result_FR3 = mysqli_query($connection, $cnt_FR3);
$result_FR3 = mysqli_num_rows($result_FR3);



	$cnt_FR4 = "SELECT * FROM `gstr-1` WHERE `Jul` = 'F' ";
	$result_FR4 = mysqli_query($connection, $cnt_FR4);
$result_FR4 = mysqli_num_rows($result_FR4);


	$cnt_FR5 = "SELECT * FROM `gstr-1` WHERE  `Aug` = 'F' ";
	$result_FR5= mysqli_query($connection, $cnt_FR5);
$result_FR5 = mysqli_num_rows($result_FR5);
	

	$cnt_FR6 = "SELECT * FROM `gstr-1` WHERE  `Sep` = 'F'";
	$result_FR6 = mysqli_query($connection, $cnt_FR6);
$result_FR6 = mysqli_num_rows($result_FR6);


	$cnt_FR7= "SELECT * FROM `gstr-1` WHERE `Oct` = 'F' ";
	$result_FR7 = mysqli_query($connection, $cnt_FR7);
$result_FR7= mysqli_num_rows($result_FR7);


	$cnt_FR8 = "SELECT * FROM `gstr-1` WHERE  `Nov` = 'F' ";
	$result_FR8= mysqli_query($connection, $cnt_FR8);
$result_FR8 = mysqli_num_rows($result_FR8);


	$cnt_FR9 = "SELECT * FROM `gstr-1` WHERE  `Dec` = 'F'";
	$result_FR9 = mysqli_query($connection, $cnt_FR9);
$result_FR9 = mysqli_num_rows($result_FR9);


	$cnt_FR10 = "SELECT * FROM `gstr-1` WHERE `Jan` = 'F'";
	$result_FR10 = mysqli_query($connection, $cnt_FR10);
$result_FR10 = mysqli_num_rows($result_FR10);


	$cnt_FR11 = "SELECT * FROM `gstr-1` WHERE  `Feb` = 'F' ";
	$result_FR11 = mysqli_query($connection, $cnt_FR11);
$result_FR11 = mysqli_num_rows($result_FR11);


	$cnt_FR12 = "SELECT * FROM `gstr-1` WHERE  `Mar` = 'F'";
	$result_FR12 = mysqli_query($connection, $cnt_FR12);
$result_FR12 = mysqli_num_rows($result_FR12);


$Cnt_fin_yea = $result_FR1+$result_FR2+$result_FR3+$result_FR4+$result_FR5+$result_FR6+$result_FR7+$result_FR8+$result_FR9+$result_FR10+$result_FR11+$result_FR12;

// ..............................................................///>>.............................................................//


$cnt_FRP1 = "SELECT* FROM `gstr-1` WHERE `Apr` = 'P'";
	$result_FRP1 = mysqli_query($connection, $cnt_FRP1);
$result_FRP1 = mysqli_num_rows($result_FRP1);


	$cnt_FRP2 = "SELECT * FROM `gstr-1` WHERE  `May` = 'P' ";
	$result_FRP2 = mysqli_query($connection, $cnt_FRP2);
$result_FRP2 = mysqli_num_rows($result_FRP2);

	$cnt_FRP3 = "SELECT * FROM `gstr-1` WHERE  `Jun` = 'P'";
	$result_FRP3 = mysqli_query($connection, $cnt_FRP3);
$result_FRP3 = mysqli_num_rows($result_FRP3);



	$cnt_FRP4 = "SELECT * FROM `gstr-1` WHERE `Jul` = 'P' ";
	$result_FRP4 = mysqli_query($connection, $cnt_FRP4);
$result_FRP4 = mysqli_num_rows($result_FRP4);


	$cnt_FRP5 = "SELECT * FROM `gstr-1` WHERE  `Aug` = 'P' ";
	$result_FRP5= mysqli_query($connection, $cnt_FRP5);
$result_FRP5 = mysqli_num_rows($result_FRP5);
	

	$cnt_FRP6 = "SELECT * FROM `gstr-1` WHERE  `Sep` = 'P'";
	$result_FRP6 = mysqli_query($connection, $cnt_FRP6);
$result_FRP6 = mysqli_num_rows($result_FRP6);


	$cnt_FRP7= "SELECT * FROM `gstr-1` WHERE `Oct` = 'P' ";
	$result_FRP7 = mysqli_query($connection, $cnt_FRP7);
$result_FRP7= mysqli_num_rows($result_FRP7);


	$cnt_FRP8 = "SELECT * FROM `gstr-1` WHERE  `Nov` = 'P' ";
	$result_FRP8= mysqli_query($connection, $cnt_FRP8);
$result_FRP8 = mysqli_num_rows($result_FRP8);


	$cnt_FRP9 = "SELECT * FROM `gstr-1` WHERE  `Dec` = 'P'";
	$result_FRP9 = mysqli_query($connection, $cnt_FRP9);
$result_FRP9 = mysqli_num_rows($result_FRP9);


	$cnt_FRP10 = "SELECT * FROM `gstr-1` WHERE `Jan` = 'P'";
	$result_FRP10 = mysqli_query($connection, $cnt_FRP10);
$result_FRP10 = mysqli_num_rows($result_FRP10);


	$cnt_FRP11 = "SELECT * FROM `gstr-1` WHERE  `Feb` = 'P' ";
	$result_FRP11 = mysqli_query($connection, $cnt_FRP11);
$result_FRP11 = mysqli_num_rows($result_FRP11);


	$cnt_FRP12 = "SELECT * FROM `gstr-1` WHERE  `Mar` = 'P'";
	$result_FRP12 = mysqli_query($connection, $cnt_FRP12);
$result_FRP12 = mysqli_num_rows($result_FRP12);


$Cnt_fin_yeaP = $result_FRP1+$result_FRP2+$result_FRP3+$result_FRP4+$result_FRP5+$result_FRP6+$result_FRP7+$result_FRP8+$result_FRP9+$result_FRP10+$result_FRP11+$result_FRP12;

// .......................................//....................................................................//
$cnt_FRN1 = "SELECT* FROM `gstr-1` WHERE `Apr` = 'N'";
	$result_FRN1 = mysqli_query($connection, $cnt_FRN1);
$result_FRN1 = mysqli_num_rows($result_FRN1);


	$cnt_FRN2 = "SELECT * FROM `gstr-1` WHERE  `May` = 'N' ";
	$result_FRN2 = mysqli_query($connection, $cnt_FRN2);
$result_FRN2 = mysqli_num_rows($result_FRN2);

	$cnt_FRN3 = "SELECT * FROM `gstr-1` WHERE  `Jun` = 'N'";
	$result_FRN3 = mysqli_query($connection, $cnt_FRN3);
$result_FRN3 = mysqli_num_rows($result_FRN3);



	$cnt_FRN4 = "SELECT * FROM `gstr-1` WHERE `Jul` = 'N' ";
	$result_FRN4 = mysqli_query($connection, $cnt_FRP4);
$result_FRN4 = mysqli_num_rows($result_FRN4);


	$cnt_FRN5 = "SELECT * FROM `gstr-1` WHERE  `Aug` = 'N' ";
	$result_FRN5= mysqli_query($connection, $cnt_FRN5);
$result_FRN5 = mysqli_num_rows($result_FRN5);
	

	$cnt_FRN6 = "SELECT * FROM `gstr-1` WHERE  `Sep` = 'N'";
	$result_FRN6 = mysqli_query($connection, $cnt_FRN6);
$result_FRN6 = mysqli_num_rows($result_FRN6);


	$cnt_FRN7= "SELECT * FROM `gstr-1` WHERE `Oct` = 'N' ";
	$result_FRN7 = mysqli_query($connection, $cnt_FRN7);
$result_FRN7= mysqli_num_rows($result_FRN7);


	$cnt_FRN8 = "SELECT * FROM `gstr-1` WHERE  `Nov` = 'N' ";
	$result_FRN8= mysqli_query($connection, $cnt_FRN8);
$result_FRN8 = mysqli_num_rows($result_FRN8);


	$cnt_FRN9 = "SELECT * FROM `gstr-1` WHERE  `Dec` = 'N'";
	$result_FRN9 = mysqli_query($connection, $cnt_FRN9);
$result_FRN9 = mysqli_num_rows($result_FRN9);


	$cnt_FRN10 = "SELECT * FROM `gstr-1` WHERE `Jan` = 'N'";
	$result_FRN10 = mysqli_query($connection, $cnt_FRN10);
$result_FRN10 = mysqli_num_rows($result_FRN10);


	$cnt_FRN11 = "SELECT * FROM `gstr-1` WHERE  `Feb` = 'N' ";
	$result_FRN11 = mysqli_query($connection, $cnt_FRN11);
$result_FRN11 = mysqli_num_rows($result_FRN11);


	$cnt_FRN12 = "SELECT * FROM `gstr-1` WHERE  `Mar` = 'N'";
	$result_FRN12 = mysqli_query($connection, $cnt_FRN12);
$result_FRN12 = mysqli_num_rows($result_FRN12);


$Cnt_fin_yeaN = $result_FRN1+$result_FRN2+$result_FRN3+$result_FRN4+$result_FRN5+$result_FRN6+$result_FRN7+$result_FRN8+$result_FRN9+$result_FRN10+$result_FRN11+$result_FRN12;

$allCnt = $Cnt_fin_yeaP +$Cnt_fin_yea+$Cnt_fin_yeaN;




?>

<?php include "in/sidebar.php" ?>
<?php include "in/navbar.php" ?>
<section id="content">
	<main style="font-family: 'Comfortaa', cursive; height:100vh">
		<div class="head-title">
			<div class="left">
				<h1>Dashboard</h1>
			</div>
		</div>


		<div class="box-info">
			<div class="card">
				<div class="text" style="width:100%;">
					<h2>GSTR-3B</h2>
					<p style="font-size: 12px">Current Month</p>
					<h6><?php echo $result ?>/<?php echo $result4 ?></h6>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $persentage ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persentage ?>%;">
						<b><?php echo $persentage . "%" ?></b>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="text" style="width:100%;">
					<h2>GSTR-1</h2>
					<p style="font-size: 12px">Current Month</p>
					<h6><?php echo $result_3b  ?>/<?php echo $result_3b4 ?></h6>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $persentage ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persentage ?>%;">
						<b><?php echo $persentage . "%" ?></b>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="text" style="width:100%;">
					<h2>GSTR-3B</h2>
					<p style="font-size: 12px">Financial Year</p>
					<h6>20/360</h6>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
				</div>
			</div>

			<div class="card">
				<div class="text" style="width:100%;">
					<h2>GSTR-1</h2>
					<p style="font-size: 12px">Financial Year</p>
					<h6><?php echo $Cnt_fin_yea  ?>/<?php echo $allCnt ?></h6>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
				</div>
			</div>
		</div>


	</main>

</section>


<?php include "in/footer.php"  ?>
<?php include "alerts.php"  ?>

