<?php include "in/header.php" ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email = $_SESSION['email'];
$cid = $_SESSION['uid'];
$mobile = $_SESSION['mobile'];
$role = $_SESSION['role'];
$image = $_SESSION['image'];




$result = mysqli_query($connection, "SELECT * FROM `gst_data`");
$count = mysqli_num_rows($result);


?>
<?php
if (isset($_POST['submits'])) {
    $user_ids = $_POST['user_id'];


    $client_ids = $_POST['client_id'];

 foreach($client_ids as $client_id){
    $insert_query = "UPDATE  gst_data Set `uid` = '$user_ids' where client_id = '$client_id'";
    mysqli_query($connection, $insert_query);
 }
}

?>





<?php include "in/sidebar.php" ?><?php include "in/navbar.php" ?>
<form method="post" action="">
    <section id="content">

        <main>

            <div class="page-content-wrapper-inner">

                <div class="col-lg">
                    <div class="row" style="height:fit-content;">

                        <p>



                            <select name="user_id" class="form-control" style="width:170%;  margin-left:20px;">
                                <option value="">
                                    Select
                                </option>
                                <?php
                                $query1 = "SELECT * FROM `users`  ";
                                $result1 = mysqli_query($connection, $query1);

                                $options = "";
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    echo "<option value='{$row['uid']}' required>{$row['f_name']}</option>";
                                }  ?>
                            </select>
                            <button type="submit" style="margin-left:200%; margin-top:-65px;" class="btn btn-success"
                                name="submits">Submit</button>




                        </p>

                    </div>

                    <div class="page-content-wrapper-inner  table_row" style="margin-top:-15px;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="padding:50px;" class="table_row">
                                    <tr>
                                        <th><input type="checkbox" id="select-all"></th>
                                        <th>Photo</th>
                                        <th>Legal_Name (<?php  echo $count; ?>)</th>
                                        <th>GSTIN</th>
                                        <th>Business</th>
                                        <th>PAN</th>
                                        <th>Employee</th>
                                        <th>View</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT f_name FROM users JOIN gst_data ON users.uid = gst_data.uid ";
                                    $result2 = mysqli_query($connection, $sql);
                                    foreach ($result as $key => $value) {

                                    ?>
                                    <tr style="font-family: 'Comfortaa', cursive; " class="table_row"
                                        style="align_item:left;">
                                        <td>
                                            <div class="row">
                                                <div class="col">



                                                    <input type='checkbox' name='client_id[]'
                                                        value="<?php echo $value['client_id']; ?>">



                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <img class="profile-img img-xm" src="assests/image/image_8.png"
                                                        alt="profile image"
                                                        style=" border-radius: 70%; width:50px; height:50px; ">

                                                </div>
                                            </div>
                        </div>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <span><small><?php echo $value['legal_name']; ?></small></span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <span><small><?php echo $value['gstin']; ?></small></span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <span><small><?php echo $value['business_name']; ?></small></span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <span><small><?php echo $value['pan_number']; ?></small></span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <span><small><?php
                                    
                                     
                                     while ($row1 = mysqli_fetch_assoc($result2)) {
                                         echo  $row1['f_name'];
                                         break;
                                         
                                     }
                                    ?></small></span>
                                </div>
                            </div>
                        </td>




                       


</form>


<td>
    <form action="view_clients.php" method="GET">
        <input type="text" value="<?php echo $value['client_id'] ?>" name='client_id' hidden>
        <button type="submit" name="submit" class="btn btn-outline-primary btn-xs"
            style="line-height:0.8rem">View</button>
    </form>
</td>

</tr>
</div>

<?php } ?>
</tbody>
</table>

</main>
</section>

<script>
const selectAllCheckbox = document.getElementById('select-all');
const dataCheckboxes = document.querySelectorAll('tbody input[type="checkbox"]');

selectAllCheckbox.addEventListener('change', () => {
    dataCheckboxes.forEach(checkbox => {
        checkbox.checked = selectAllCheckbox.checked;
    });
});
</script>

<?php include "in/footer.php" ?>