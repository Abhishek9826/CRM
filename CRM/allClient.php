<?php error_reporting(0); ?>


<?php include "in/header.php" ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['cid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];

$connections;
$query = "Select * FROM users";
$result = mysqli_query($connection, $query);
$count =  mysqli_num_rows($result);
if ($count > 0) {
} else {
  header("Location: addUser.php?addUser");
}

?>
<?php include "in/sidebar.php" ?><?php include "in/navbar.php" ?>

<section id="content" >


  <main>

    <div class="page-content-wrapper-inner table_row">
      <div class="col-lg">
        <div class="grid">
          <p class="grid-header" style="font-family:Comfortaa; font-weight:900"><b>Total <?php echo $count;  ?> Users</b> 
            <!-- <select class="col-md-2" aria-label="Select Role" style="margin-left: 15px display inline">
              <option selected>Open this select menu</option>
              <option value="employee">Employee</option>
              <option value="client">Client</option>
              <option value="admin">Admin</option>
             </select>
             <input class="btn btn-outline-primary btn-rounded btn-xs" type="submit" name="submit" value="Submit" style="margin-left: 15px"> -->

          <form style = "margin-left: 70%;  margin-top: -5%;" class="form-inline" style="margin-left: 15px display inline " name="search" action="allClient.php" method="POST">
             <div class="form-input">
              <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" autocomplete="off">
              <input class="btn btn-primary" type="submit" value="search" style="position:absolute; margin-left:0px; height:min-content">
             </div>
          </form>

          <?php
          $query = $_POST['search'];
          $result = mysqli_query($connection, "SELECT * FROM users WHERE f_name LIKE '%$query%' or l_name Like '%$query%' "); ?>
          </p>
          <div class="item-wrapper"  style= "font-family: 'Comfortaa', cursive;">
            <div class="table-responsive" >
              <table class="table table_row">
                <thead>
                  <tr style= "font-size: 15px ">
                  <th><input type="checkbox"></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th >Role</th>
                    <th class="text-center">Gender</th>
                    <th>User ID</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($result as $key => $value) {

                  ?>
                    <tr style= "font-size: 13px " id = "<?php echo $value['cid'] ?>">  
                    <td><input type="checkbox"></td>
                      <small><td><?php echo $value['f_name'] ." ". $value['l_name'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['mobile'] ?></td>
                      <td><?php echo $value['role'] ?></td>
                      <td class="text-center"><?php echo $value['gender'] ?></td>
                      <td><?php echo $value['cid'] ?></td></small>
                     
                      <!-- <td >
                        <form action="deleteFunction.php" method="post">
                          <input type="text" name="function" hidden value="delete">
                          <input type="text" name="id" hidden value="<?php echo $value['cid'] ?>">
                          <button type="submit" name="submit" value="submit" class="btn btn-outline-danger btn-xs" style="line-height:0.8rem" data-id=".$value['cid']">Delete</button>

                        </form>


                      </td> -->
                      <td>
                        <form action="viewUser.php" method="POST">
                          <input type="text" value="<?php echo $value['uid'] ?>" name='uid' hidden>
                          <button type="submit" name="submit" class="btn btn-outline-primary btn-xs" style="line-height:0.8rem">View</button>
                        </form>
                      </td>
                    </tr>

                  <?php } ?>








                </tbody>
              </table>
          
         

            </div>
          </div>
        </div>
      </div>

    </div>


  </main>

</section>


<?php include "in/footer.php"  ?>



<script>

$(document).on('click', 'data-id', function() {
  // Get the id of the record to delete
  var id = $(this).data('id');

  // Send an AJAX request to the PHP script
  $.ajax({
    url: 'deleteFunction.php',
    method: 'POST',
    data: {
      id: id
    },
    success: function(response) {
      // Handle the response from the PHP script
      if (response === 'success') {
        alert('Record deleted successfully');
        location.reload(); // Refresh the page
      } else {
        alert('Failed to delete record');
      }
    },
    error: function(xhr, status, error) {
      console.log('Error:', error);
    }
  });
});

</script>