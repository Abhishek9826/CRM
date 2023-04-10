<?php

$connection = mysqli_connect('localhost', 'root', '', 'test');
if (!$connection) {
	die("Database connection failed");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.3/css/boxicons.min.css">
	<!-- or -->
	<link rel="icon" href="assests\image\mjcicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- izitoast -->
	<!-- <link rel="stylesheet" href="iziToast-master/src/css/animations.styl">
	 <link rel="stylesheet" href="iziToast-master/src/css/layouts.styl">
	 <link rel="stylesheet" href="iziToast-master/src/css/style.styl">
	 <link rel="stylesheet" href="iziToast-master/src/css/themes.styl">
	 <link rel="stylesheet" href="iziToast-master/src/css/toast.styl"> -->
	<!-- My CSS -->
	<link rel="stylesheet" href="assests/css/style.css">
	<link rel="stylesheet" href="assests/css/toastr.min.css">
	<link rel="shortcut icon" href="https://mjcmis.000webhostapp.com/logo/fivicon-48.ico" type="image/x-icon">
	<title>VakeelSaab</title>


</head>