<?php  require "in/header.php"; ?>
<?php

if(!isset($_POST['submit'])) {
    echo "FORM NOT SUMITTED";
    header("Location: allClient.php?error=notdeleted");
} else{
    echo "FORM  SUMITTED";
    if($_POST['function'] == 'delete'){
        $id = $_POST['id'];
        $query = "DELETE FROM `users` WHERE cid = '$id'";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die();
        } else {
            header("Location: allClient.php?success=userdeleted");
        }
    }
   
}




























