<?php include "in/header.php" ?>
<?php
if (isset($_POST['submit']))

  $name = $_FILES["fileToUpload"]["name"];
$password = $_REQUEST['sharecode'];
$target = 'Users_Data/xmlFile/' . $_FILES["fileToUpload"]["name"];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target);

$reg_date = date("ymd");
$count = 0;
$query = "Select * FROM users WHERE reg_date = $reg_date";
$result = mysqli_query($connection, $query);
$count =  mysqli_num_rows($result);
$count = $count + 1;
$count = str_pad($count, 3, 0, STR_PAD_LEFT);
$uid = "U" . $reg_date . $count;


$rand = $uid;
$zip = new ZipArchive;
if ($zip->open('Users_Data/xmlFile/' . $name) == TRUE) {

  $zip->setPassword($password);
  $zip->extractTo('Users_Data/xmlFile/' . $rand);
  $zip->close();
  $dir = 'Users_Data/xmlFile/' . $rand;
  $files = scandir($dir, 1);
  $xml_file_name = $files['0'];
  $read_xml = simplexml_load_file($dir . "/" . $xml_file_name);
  $json_encode = json_encode($read_xml);
  $array = json_decode($json_encode, true);
  $image = $array['UidData']['Pht'];
  $base64_decode = base64_decode($image);
  $a_photo = file_put_contents('Users_Data/xmlFile/' . $rand . '/' . $rand . ".png", $base64_decode);
  $aimage = $rand . ".png";
  $image = 'Users_Data/xmlFile/' . $rand . '/' . $rand . '.png';


  $token = uniqid();


  $str = $array['UidData']['Poi']['@attributes']['name'];
  $str = (explode(" ", $str));
  $count = (count($str));



  for ($i = 0; $i < 3; $i++) {

    if ($count == 1) {
      $l_name =  ucwords(mysqli_real_escape_string($connection, $str[0]));
    } else if ($count == 2) {
      $f_name =  ucwords(mysqli_real_escape_string($connection, $str[0]));
      $m_name =  ucwords(mysqli_real_escape_string($connection, 'NULL'));
      $l_name =  ucwords(mysqli_real_escape_string($connection, $str[1]));
    } else if ($count == 3) {
      $f_name =  ucwords(mysqli_real_escape_string($connection, $str[0]));
      $m_name =  ucwords(mysqli_real_escape_string($connection, $str[1]));
      $l_name =  ucwords(mysqli_real_escape_string($connection, $str[2]));
    }
  }



  $email = strtolower(mysqli_real_escape_string($connection, $_POST['email']));

  $mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
   
  $pan1 = mysqli_real_escape_string($connection, $_POST['pan1']);
  $pan2 = mysqli_real_escape_string($connection, $_POST['pan2']);
  $pan3 = mysqli_real_escape_string($connection, $_POST['pan3']);
  $pan4 = mysqli_real_escape_string($connection, $_POST['pan4']);
  $pan5 = mysqli_real_escape_string($connection, $_POST['pan5']);
  $pan6 = mysqli_real_escape_string($connection, $_POST['pan6']);
  $pan7 = mysqli_real_escape_string($connection, $_POST['pan7']);
  $pan8 = mysqli_real_escape_string($connection, $_POST['pan8']);
  $pan9 = mysqli_real_escape_string($connection, $_POST['pan9']);
  $pan10 = mysqli_real_escape_string($connection, $_POST['pan10']);
  $pan = $pan1 . $pan2 . $pan3 . $pan4 . $pan5 . $pan6 . $pan7 . $pan8 . $pan9 . $pan10;
  $aadhhar1 = mysqli_real_escape_string($connection, $_POST['aadhhar1']);
  $aadhhar2 = mysqli_real_escape_string($connection, $_POST['aadhhar2']);
  $aadhhar3 = mysqli_real_escape_string($connection, $_POST['aadhhar3']);
  $role = mysqli_real_escape_string($connection, $_POST['role']);
  $aadhhar = $aadhhar1 . $aadhhar2 . $aadhhar3;
  $gender = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poi']['@attributes']['gender']));
  $careof = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['careof']));
  $country = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['country']));
  $dist = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['dist']));
  $house = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['house']));
  $landmark = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['landmark']));
  $loc = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['loc']));
  $pc = mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['pc']);
  $po = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['po']));
  $state = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['state']));
  $street = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['street']));
  $subdist = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['subdist']));
  $vtc = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poa']['@attributes']['vtc']));
  $dob = ucwords(mysqli_real_escape_string($connection, $array['UidData']['Poi']['@attributes']['dob']));





  $query = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = mysqli_query($connection, $query);
  $result =  mysqli_num_rows($result);
  if ($result > 0) {
    $_SESSION['Status']="Registerd/Inserted successfully";
    $_SESSION['Status_code']="success";
    header('Location: adduser.php?user=emailduplicate');
  } else {

    $query = "SELECT * FROM `users` WHERE `mobile` = '$mobile'";
    $result = mysqli_query($connection, $query);
    $result =  mysqli_num_rows($result);
    if ($result > 0) {
      header('Location: adduser.php?user=mobileduplicate');
    } else {

      $query = "SELECT * FROM `users` WHERE `pan` = '$pan'";
      $result = mysqli_query($connection, $query);
      $result =  mysqli_num_rows($result);
      if ($result > 0) {
        header('Location: adduser.php?user=panduplicate');
      } else {

        $query = "SELECT * FROM `users` WHERE `aadhhar` = '$aadhhar'";
        $result = mysqli_query($connection, $query);
        $result =  mysqli_num_rows($result);
        if ($result > 0) {
          header('Location: adduser.php?user=aadhharduplicate');
        } else {
          $query = "INSERT INTO `users`(`f_name`,`m_name`,`l_name`,`mobile`,`email`,`uid`,`pan`,`aadhhar`,`role`,`gender`,`careof`,`country`,`dist`,`house`,`landmark`,`loc`,`pc`,`state`,`subdist`,`vtc`,`dob`,`street`,`reg_date`,`po`,`image`,`token`)
            VALUES('$f_name','$m_name','$l_name','$mobile',' $email','$uid',' $pan','$aadhhar','$role','$gender','$careof','$country','$dist','$house','$landmark','$loc','$pc','$state','$subdist','$vtc','$dob','$street','$reg_date','$po','$image',' $token')";
          $result = mysqli_query($connection, $query);
          header('Location: adduser.php?user=successfully');

          if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
          }
        }
      }
    }
  }
} else {


  header("Location: addUser.php?error=erroropening");
}



?>