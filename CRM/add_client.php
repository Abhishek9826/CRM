<?php error_reporting(0); ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['cid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>

<?php include "in/header.php"  ?>
<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>

<style>
.no-spinners::-webkit-inner-spin-button,
.no-spinners::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

<section id="content"  style= "font-family: 'Comfortaa', cursive;">
  <main>
  <div class="form_container">
				<div class="form_heading" >
					<h4 style= "font-size: 25px";>Add Clients</h4>
				</div>
				<form action="formProcess.php" method="post" enctype="multipart/form-data">
					<div class="form-group row showcase_row_area"  >
						<div class="col-md-1 showcase_text_area" style= "font-size: 17px; padding-top:10px;">
							<label for="inputType1" class="panforusers" >Pan:</label>
						</div>
						<div class="col-md-8 showcase_content_area Pancolumnsize">
						<div id="pan" class="inputs d-flex flex-row justify-content-center">
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan1" id="pan1" maxlength="1" required style="text-transform:uppercase" />
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan2" id="pan2" maxlength="1" required style="text-transform:uppercase" />
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan3" id="pan3" maxlength="1" required style="text-transform:uppercase" />
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan4" id="pan4" maxlength="1" required style="text-transform:uppercase" />
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan5" id="pan5" maxlength="1" required style="text-transform:uppercase" />
                    <input class="text-left form-control rounded pan_pan" type="number" name="pan6" id="pan6" maxlength="1" required class="no-spinners"/>
                    <input class="text-left form-control rounded pan_pan" type="number" name="pan7" id="pan7" maxlength="1" required class="no-spinners"/>
                    <input class="text-left form-control rounded pan_pan" type="number" name="pan8" id="pan8" maxlength="1" required class="no-spinners"/>
                    <input class="text-left form-control rounded pan_pan" type="number" name="pan9" id="pan9" maxlength="1" required class="no-spinners"/>
                    <input class="text-left form-control rounded pan_pan" type="text" name="pan10" id="pan10" maxlength="1" requiredstyle="text-transform:uppercase" />
							</div>
						</div>
					</div>

					<!-- Aadhar -->
					<div class="form-group row showcase_row_area">
						<div class="col-md-1 showcase_text_area" style= "font-size: 17px; padding-top:10px;">
							<label for="inputType1" class="adharforuser" >Aadhaar</label>
						</div>
						<div class="col-md-8 showcase_content_area">
							<div id="aadhhar_num" class="inputs d-flex flex-row justify-content-center">
                    <input class="text-left form-control rounded" type="number" name="aadhaar1" id="aadhaar1" maxlength="4" required />
                    <input class="text-left form-control rounded" type="number" name="aadhaar2" id="aadhaar2" maxlength="4" required />
                    <input class="text-left form-control rounded" type="number" name="aadhaar3" id="aadhaar3" maxlength="4" required />
							</div>
						</div>
					</div>

					<!-- Mobile -->
					<div class="form-group row showcase_row_area">
						<div class="col-md-1 showcase_text_area" style= "font-size: 17px; padding-top:10px;">
							<label for="inputType1" class="mobforusers" style= "font-size: 17px">Mobile:</label>
						</div>
						<div class="col-md-3 showcase_content_area" id="Mobile_num">
                     <input type="number" name="mobile" class="form-control" id="inputType1" maxlength="10" required>
            							
						</div>
                        
                         
						<div style= "font-size: 17px; padding-top:10px;">
							<label for="inputType12" class="emailforusers" style= "font-size: 17px">Email:</label>
						</div>
						<div class="col-md-3 showcase_content_area" id="Email_id">
            <input type="email" name="email" class="form-control" id="inputType2" required value="" required>
            
						</div>
					 </div>

					<!-- Roles -->
					<div class="row showcase_row_area form-group">
				    <span>
					<div class="row showcase_row_area" >
							<div class="col-md-2 showcase_text_area" style= "font-size: 17px; padding-top:8px; padding-left:30px">
								<label class="roleforusers" >Client Type</label>
							</div>
						</span>
						<span>
							<div class="col-md-101 showcase_content_area">
								<div class="form-inline">
									<div class="radio mb-3">
										<label class="radio-label mr-4" style= "font-size: 14px">
                    <input name="role" type="radio" value="Employee" checked>IT Client<i class="input-frame"></i>
                    
										</label>
									</div>
									<div class="radio mb-3">
										<label class="radio-label mr-4" style= "font-size: 14px">
                    <input name="role" type="radio" value="Client">GSTIN Client<i class="input-frame"></i>
                  
										</label>
									</div>
									<div class="radio mb-3">
										<label class="radio-label mr-4" style= "font-size: 14px"> 
                    <input name="role" type="radio" value="Admin">Account Client<i class="input-frame"></i>
                     
										</label>
									</div>
									<div class="radio mb-3">
										<label class="radio-label mr-4" style= "font-size: 14px">
                    <input name="role" type="radio" value="Client">Audit Client<i class="input-frame"></i>
                  
										</label>
									</div>

								</div>
							</div>
						</span>
					</div>

					
					<div style="margin-left:50%;">
						<button type="submit" name="submit" class="btn-outline-rounded" ;>Add Clients</button>
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


 </script>

<?php include "in/footer.php"  ?>