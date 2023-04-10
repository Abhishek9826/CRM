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
<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>


<section id="content" style="font-family: 'Comfortaa', cursive;">
	<main>
		<div class="form_container">
			<div class="form_heading">
				<h4 style="font-size: 25px" ;>Add Users</h4>
			</div>
			<form action="formProcess.php" method="post" enctype="multipart/form-data">
				<div class="form-group row showcase_row_area">
					<div class="col-md-1 showcase_text_area" style="font-size: 17px; padding-top:10px;">
						<label for="inputType1" class="panforusers">Pan:</label>
					</div>
					<div class="col-md-8 showcase_content_area Pancolumnsize" style="margin-left:10px">
						<div id="pan" class="inputs d-flex flex-row justify-content-center">
							<input class="text-left form-control rounded pan_pan" type="text" name="pan1" id="pan1" maxlength="1" required style="text-transform:uppercase" />
							<input class="text-left form-control rounded pan_pan" type="text" name="pan2" id="pan2" maxlength="1" required style="text-transform:uppercase" />
							<input class="text-left form-control rounded pan_pan" type="text" name="pan3" id="pan3" maxlength="1" required style="text-transform:uppercase" />
							<input class="text-left form-control rounded pan_pan" type="text" name="pan4" id="pan4" maxlength="1" required style="text-transform:uppercase" />
							<input class="text-left form-control rounded pan_pan" type="text" name="pan5" id="pan5" maxlength="1" required style="text-transform:uppercase" />
							<input class="text-left form-control rounded pan_pan " type="number" name="pan6" id="pan6" maxlength="1" required style="-webkit-appearance: none; -moz-appearance: textfield; appearance: none; -ms-appearance: none;" />
							<input class="text-left form-control rounded pan_pan arrow" type="number" name="pan7" id="pan7" maxlength="1" required />
							<input class="text-left form-control rounded pan_pan arrow" type="number" name="pan8" id="pan8" maxlength="1" required />
							<input class="text-left form-control rounded pan_pan arrow" type="number" name="pan9" id="pan9" maxlength="1" required />
							<input class="text-left form-control rounded pan_pan" type="text" name="pan10" id="pan10" maxlength="1" requiredstyle="text-transform:uppercase" />
						</div>
					</div>
				</div>

				<!-- Aadhar -->
				<div class="form-group row showcase_row_area">
					<div class="col-md-1 showcase_text_area" style="font-size: 17px; padding-top:10px;">
						<label for="inputType1" class="adharforuser">Aadhaar:</label>
					</div>
					<div class="col-md-8 showcase_content_area" style="margin-left:10px">
						<div id="aadhhar_num" class="inputs d-flex flex-row justify-content-center">
							<input class="text-left form-control rounded" type="number" name="aadhaar1" id="aadhaar1" maxlength="4" required style="-webkit-appearance: none; -moz-appearance: textfield; appearance: none; -ms-appearance: none;" />
							<input class="text-left form-control rounded" type="number" name="aadhaar2" id="aadhaar2" maxlength="4" required style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: textfield !important;" />
							<input class="text-left form-control rounded" type="number" name="aadhaar3" id="aadhaar3" maxlength="4" required />
						</div>
					</div>
				</div>

				<!-- Mobile -->
				<div class="form-group row showcase_row_area">
					<div class="col-md-1 showcase_text_area" style="font-size: 17px; padding-top:10px;">
						<label for="inputType1" class="mobforusers" style="font-size: 17px">Mobile:</label>
					</div>
					<div class="col-md-3 showcase_content_area" id="Mobile_num" style="margin-left:10px;">
						<input type="number" name="mobile" class="form-control" id="inputType1" maxlength="10" required>

					</div>


					<div style="font-size: 17px; padding-top:10px; margin-left:30px;">
						<label for="inputType12" class="emailforusers" style="font-size: 17px">Email:</label>
					</div>
					<div class="col-md-4 showcase_content_area" id="Email_id">
						<input type="email" name="email" class="form-control" id="inputType2"  required>

					</div>
				</div>

				<!-- Roles -->
				<div class="row showcase_row_area form-group">
					<span>
						<div class="row showcase_row_area">
							<div class="col-md-2 showcase_text_area" style="font-size: 17px; padding-top:8px; padding-left:30px">
								<label class="roleforusers">Role:</label>
							</div>
					</span>
					<span>
						<div class="col-md-101 showcase_content_area" style="margin-left:-12px;">
							<div class="form-inline">
								<div class="radio mb-3">
									<label class="radio-label mr-4" style="font-size: 14px">
										<input name="role" type="radio" value="Employee" checked>Employee<i class="input-frame"></i>

									</label>
								</div>
								<div class="radio mb-3">
									<label class="radio-label mr-4" style="font-size: 14px">
										<input name="role" type="radio" value="Client">Client<i class="input-frame"></i>

									</label>
								</div>
								<div class="radio mb-3">
									<label class="radio-label mr-4" style="font-size: 14px">
										<input name="role" type="radio" value="Admin">Admin<i class="input-frame"></i>

									</label>
								</div>
							</div>
						</div>
					</span>
				</div>

				<div class="form-group row showcase_row_area" style="margin-top:10px;">
					<span>
						<div class="row showcase_row_area mb-3">
							<span>
								<div class="col-md-6 showcase_text_area" style="font-size: 17px; padding-left:47px;  padding-top:10px;">
									<label>File Upload:</label>
								</div>
							</span>
							<span>
								<div class="col-md-10 showcase_content_area" style="margin-left: -50px; ">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="fileToUpload" required>
										<label class="custom-file-label" for="customFile" style="font-size: 14px">Upload XML File</label>
									</div>
								</div>
							</span>
							<span>
								<div class="col-md-10 showcase_content_area" style="margin-left:0px;">
									<div class="password" class="showcase_row_area">
										<input name="sharecode" type="number" class="form-control" id="password" style="font-size: 14px" placeholder="Share Code" maxlength="4" required />
									</div>
								</div>
							</span>
					</span>

					<span style="margin-left: -13%;">
						<div class="col-md-6 showcase_text_area">
							<label class="passforusers"></label>
						</div>
					</span>

				</div>
				<div style="margin-left:50%;">
					<button type="submit" name="submit" class="btn-outline-rounded" ;>Add User</button>
				</div>
			</form>
		</div>
	</main>

</section>
<script>
	document.addEventListener("DOMContentLoaded", function(event) {

		function panInput() {
			const inputs = document.querySelectorAll('#pan > *[id]');
			for (let i = 0; i < inputs.length; i++) {
				inputs[i].addEventListener('keydown', function(event) {
					if (event.key === "Backspace") {
						inputs[i].value = '';
						if (i !== 0) inputs[i - 1].focus();
					} else {
						if (i === inputs.length - 1 && inputs[i].value !== '') {
							return true;
						} else if (event.keyCode > 47 && event.keyCode < 58) {
							inputs[i].value = event.key;
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						} else if (event.keyCode > 64 && event.keyCode < 91) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						} else if (event.keyCode > 95 && event.keyCode < 106) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						}
					}
				});
			}
		}
		panInput();


	});


	document.addEventListener("DOMContentLoaded", function(event) {

		function panInput() {
			const inputs = document.querySelectorAll('#pan > *[id]');
			for (let i = 0; i < inputs.length; i++) {
				inputs[i].addEventListener('keydown', function(event) {
					if (event.key === "Backspace") {
						inputs[i].value = '';
						if (i !== 0) inputs[i - 1].focus();
					} else {
						if (i === inputs.length - 1 && inputs[i].value !== '') {
							return true;
						} else if (event.keyCode > 47 && event.keyCode < 58) {
							inputs[i].value = event.key;
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						} else if (event.keyCode > 64 && event.keyCode < 91) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						} else if (event.keyCode > 95 && event.keyCode < 106) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 1) inputs[i + 1].focus();
							event.preventDefault();
						}
					}
				});
			}
		}
		panInput();


	});
	document.addEventListener("DOMContentLoaded", function(event) {

		function aadhaarInput() {
			const inputs = document.querySelectorAll('#aadhaar > *[id]');
			for (let i = 0; i < inputs.length; i++) {
				inputs[i].addEventListener('keydown', function(event) {
					if (event.key === "Backspace") {
						inputs[i].value = '';
						if (i !== 0) inputs[i - 4].focus();
					} else {
						if (i === inputs.length - 4 && inputs[i].value !== '') {
							return true;
						} else if (event.keyCode > 47 && event.keyCode < 58) {
							inputs[i].value = event.key;
							if (i !== inputs.length - 4) inputs[i + 4].focus();
							event.preventDefault();
						} else if (event.keyCode > 64 && event.keyCode < 91) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 4) inputs[i + 4].focus();
							event.preventDefault();
						} else if (event.keyCode > 95 && event.keyCode < 106) {
							inputs[i].value = String.fromCharCode(event.keyCode);
							if (i !== inputs.length - 4) inputs[i + 4].focus();
							event.preventDefault();
						}
					}
				});
			}
		}
		aadhaarInput();


	});
</script>


<script>
	// Get the number input element
	const numberInput = document.getElementById("pan6");

	// Set the arrow buttons to display none
	numberInput.style.setProperty("-webkit-inner-spin-button", "none");
	numberInput.style.setProperty("-webkit-outer-spin-button", "none");
	numberInput.style.setProperty("-moz-appearance", "textfield");
</script>





<?php include "in/footer.php"  ?>