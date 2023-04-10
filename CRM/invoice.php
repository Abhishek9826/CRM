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

<?php

if(isset($_POST['submit']))
    $Uid = $_POST['client_id'];
    $query  = "SELECT * FROM `gst_data` Where `client_id` = '$Uid'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

            $legal_name = $row['legal_name'];
            $client_id  = $row['client_id'];
            $cid = $row['cid'];
            
        }
    }

?>


<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>




<style>
           

           input,
           select {
               padding: 8px;
               
               border-radius: 2px;
               border: none;
               box-shadow: 0px 0px 5px #aaa;
               font-size: 14px;
           }
   
           #amount {
               width: 125px;
               height: 32px;
           }
   
           .service-row {
               display: flex;
               align-items: center;
           }
   
           .service-row label {
               margin-right: 10px;
           }
           .service-row {
         display: flex;
         justify-content: space-evenly;
        
         margin-bottom: 10px;
       }
       
       .service-row span {
         margin-right: 10px;
       }
       
       .remove-service-btn {
         background-color: red;
         color: white;
         border: none;
         padding: 5px 10px;
         cursor: pointer;
       }
           </style>
         
   
   
   <section id="content">
       <main>
           <div class="form_container" style="height:80%; margin-top:1%;">
               <div class="form_heading">
                   <h4 style="font-size: 25px;">Creating Invoice</h4>
               </div>
   
               <div class="services-container">
                   <div class="service-row">
                       <label for="Services"><b>Services:</b></label>
   
                       <h1><?php echo $legal_name; ?></h1>
                       <form action="insert.php" method="Post">
                       <select id="services" name="dropdown" style="width:50%;" >
                           <option value="">Select</option>
                           <option value="GST">GSTIN Client</option>
                           <option value="IT">IT Client</option>
                           <option value="AUDIT">Audit Client</option>
                       </select>
   
                       <label for="Amount"><b>Amount:</b></label>
                       <input type="number" id="amount" name="number" min="0" step="0.01" >
   
                       <button type="button"  class="add-service-btn btn-outline-rounded" style="margin-left:10px;">Add Service</button>
                      
                   </div>
               </div>
   
               <div id="services-list" style="font-size:14px ; padding:1rem;";>
          
           </div>
           <input type="hidden" name="services-json" id="services-json">
           <input type="hidden" id="subtotal" name="subtotal">
           <input type="text" value="<?php echo  $cid ?>" name='cid' hidden>
           <button type="submit" name = "submit" class="add-service-btn btn-outline-rounded" style="margin-left:10px;" onclick="redirectToInvoice()">Submit</button>
   
           </form>
   
       </div>
       <?php include "in/footer.php"  ?>
       <script>  
    const addServiceBtn = document.querySelector('.add-service-btn');
   const servicesList = document.getElementById('services-list');
   let serviceCount = 0;
   let totalAmount = 0;
   let serviceData = [];
   
   addServiceBtn.addEventListener('click', function() {
     const servicesSelect = document.getElementById('services');
     const servicesOption = servicesSelect.options[servicesSelect.selectedIndex];
     const amountInput = document.getElementById('amount');
     const amountValue = amountInput.value;
   
     if (servicesOption.value === 'select' || !amountValue) {
       return;
     }
   
     const serviceRow = document.createElement('div');
     serviceRow.classList.add('service-row');
   
     const serviceName = document.createElement('span');
     serviceName.textContent = servicesOption.text;
     serviceRow.appendChild(serviceName);
   
     const amountValueSpan = document.createElement('span');
     amountValueSpan.textContent = amountValue;
     serviceRow.appendChild(amountValueSpan);
   
     const removeBtn = document.createElement('button');
     removeBtn.classList.add('remove-service-btn');
     removeBtn.textContent = 'Remove';
     removeBtn.dataset.serviceCount = serviceCount;
     serviceRow.appendChild(removeBtn);
   
     servicesList.appendChild(serviceRow);
   
     servicesSelect.value = 'select';
     amountInput.value = '';
     serviceCount++;
   
     totalAmount += parseFloat(amountValue);
     const subtotal = document.createElement('div');
     subtotal.textContent = `Subtotal: ${totalAmount.toFixed(2)}`;
     servicesList.appendChild(subtotal);
   
     const service = {
       name: servicesOption.text,
       amount: parseFloat(amountValue)
     };
     serviceData.push(service);
   
     // Add event listener to the remove button
     removeBtn.addEventListener('click', function() {
       const serviceAmount = serviceData[this.dataset.serviceCount].amount;
       totalAmount -= serviceAmount;
       const subtotal = document.querySelector('[data-subtotal]');
       subtotal.textContent = `Subtotal: ${totalAmount.toFixed(2)}`;
       const serviceToRemove = document.querySelector(`[data-service-count="${this.dataset.serviceCount}"]`).parentNode;
       serviceToRemove.remove();
       serviceData.splice(this.dataset.serviceCount, 1);
       serviceCount--;
       // Update the dataset values of the remaining remove buttons
       document.querySelectorAll('.remove-service-btn').forEach(function(button, index) {
         button.dataset.serviceCount = index;
       });
     });
   
     // Update the JSON data
     const servicesJson = JSON.stringify(serviceData);
     const servicesJsonInput = document.getElementById('services-json');
     servicesJsonInput.value = servicesJson;
   });
   
   
   
       </script>