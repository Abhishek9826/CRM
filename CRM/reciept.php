<?php error_reporting(0); ?>

<?php include "in/header.php"  ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['uid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>


<?php include "in/sidebar.php"  ?><?php include "in/navbar.php"  ?>

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
                <h4 style="font-size: 25px;">Create Reciept</h4>

                <form method="post" action="recieptcode.php">
                    <select name="user_id" class="form-control" style="width:30%; ">


                        <option value="">
                            --Select--
                        </option>
                        <?php
                        $query1 = "SELECT * FROM gst_data";
                        $result1 = mysqli_query($connection, $query1);

                        $options = "";
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo "<option value='{$row['cid']}' required>{$row['legal_name']}</option>";
                        }  ?>
                    </select>
            </div>

            <div class="services-container">
                <div class="service-row">
                    <div style="text-align:left; width:fit-content; border:none;">
                        <label for="Services"><b>Mode of payment</b></label>
                        <select id="services" name="dropdown">
                            <option value="">--Select--</option>
                            <option value="Bank">Bank</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>


                    <label for="Amount"><b>Amount:</b></label>
                    <input type="number" id="amount" name="number" min="0" step="0.01">


                </div>
            </div>
            <button type="submit" name="submit" class="add-service-btn btn-outline-rounded" style="margin-left:10px;">Submit</button>
            </form>
        </div>
    </main>
</section>

<?php include "in/footer.php" ?>