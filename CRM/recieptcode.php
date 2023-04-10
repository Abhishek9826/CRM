<?php include "in/header.php"  ?>

<?php



if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the values from the form
$cid = $_POST['user_id'];
$mode = $_POST['dropdown'];
$credit = $_POST['number'] . " "."Cr";

$date = date('d-m-y');


$reg_date = date("dmy");

$query = "Select * FROM   $cid WHERE date = $reg_date AND credit IS NOT NULL";
$result = mysqli_query($connection, $query);
$count =  mysqli_num_rows($result);
$count = $count + 1;
$count = str_pad($count, 3, 0, STR_PAD_LEFT);
$uniqueNumber = "RCP" ."/". $reg_date . $count;

$sql = "INSERT INTO $cid (`credit`, `date`,`unique_number`,`mode`) VALUES ('$credit', '$date','$uniqueNumber','$mode')";


// Execute the query
if ($connection->query($sql) === TRUE) {
    header("Location: reciept.php");
} else {
    echo "Error updating record: " . $connection->error;
}

// Close the connection
$connection->close();
?>
