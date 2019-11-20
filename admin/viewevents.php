<?php
include('includes/header.php'); 
include('security.php');
?>
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php
include('includes/navbar.php');
?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Volunter</h1> -->
<!-- <p class="mb-4">We maintain details of each and every volunter. -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Our Events</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php
      $query="SELECT * FROM event";
      $query_run=mysqli_query($con,$query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Event Location </th>
            <th>Event Date</th>
            <th>Image</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while($row= mysqli_fetch_assoc($query_run))
                {
                    ?>
                <tr>
                  <td><?php echo $row['e_id']; ?></td>
                  <td><?php echo $row['e_title']; ?></td>
                  <td><?php echo $row['e_location']; ?></td>
                  <td><?php echo $row['e_date']; ?></td>
                  <td><?php echo '<img src="../uploads/events/'.$row['e_image'].'" width="130px;" height="100px;">' ?></td>
                  <td>
                    <form action="editevent.php" method="POST">
                    <input type="hidden" name="edit_event_id" value="<?php echo $row['e_id'];?>">
                    <button  type="submit" name="edit_event_btn"class ="btn btn-primary">EDIT</button>
                    </form>
                  </td>

                  <td>
                    <form action="deleteevents.php" method="POST">
                      <input type="hidden" name="del_event_id" value="<?php echo $row['e_id'];?>">
                      <button  type="submit" name="delete_event_btn"class ="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                </tr>
                <?php
                }
              }
              else
              {
                echo"No Record Found";
              }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/script.php'); ?>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


<?php
include('includes/footer.php');
?>
