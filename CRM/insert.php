


<?php
$connection = mysqli_connect('localhost', 'root', '', 'test');
if (!$connection) {
	die("Database connection failed");
}
?>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cid = $_POST['cid'];
  $total = 0;
  $date = date("d-m-y");

  $reg_date = date("dmy");
  static $count = 0;
$query = "Select * FROM   $cid  WHERE date = $reg_date AND credit IS  NULL";
$result = mysqli_query($connection, $query);
$count =  mysqli_num_rows($result);
$count = $count + 1;
$count = str_pad($count, 3, 0, STR_PAD_LEFT);
$uniqueNumber = "INV" ."/". $reg_date . $count;
  

  $servicesJson = $_POST['services-json'];
 
  $servicesData = json_decode($servicesJson, true);

  foreach ($servicesData as $service) {
    $total += $service['amount'];
  }
   
  $connection = new mysqli('localhost', 'root', '', 'test');

  if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
  }

  $servicesJson = mysqli_real_escape_string($connection, $servicesJson);

  $sql = "INSERT INTO $cid (`service_name`, `date`,`unique_number`,`service_amount`) VALUES ('$servicesJson', '$date','$uniqueNumber','$total')";

  if ($connection->query($sql) !== TRUE) {
    echo 'Error: ' . $sql . '<br>' . $connection->error;
  }else{
    header("Location: invoiceform.php?cid=$cid");
  }

  $connection->close();
}else {
  header("Location: invoice.php?error=Input field empty");
}
?>


