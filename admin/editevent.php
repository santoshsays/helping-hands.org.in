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
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Volunter Edit</h6>
  </div>
  <div class="card-body">
    
  <?php
  if(isset($_POST['edit_event_btn']))
  {
      $id=$_POST['edit_event_id'];
      $query="SELECT * FROM event WHERE e_id='$id'";
      $query_run =mysqli_query($con,$query);
      foreach ($query_run as $row)
      {
      ?>
        <form action="editeventcode.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_event_id" value="<?php echo $row['e_id'] ?>" >
            
            <div class="form-group ">
                <label>Events Name</label>
                <input type="text" name="edit_event_title" value="<?php echo $row['e_title'] ?>"class="form-control">
            </div>
            
            <div class="row">
                <div class="form-group col-4">
                    <label>Event Date</label>
                    <input type="date" name="edit_event_date" value="<?php echo $row['e_date'] ?>" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Event Starting Time</label>
                    <input type="time" name="edit_event_stime" value="<?php echo $row['e_start_time'] ?>" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Event Ending Time</label>
                    <input type="time" name="edit_event_etime"  value="<?php echo $row['e_end_time'] ?>"class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label>Events Location</label>
                    <input type="text" name="edit_event_location"value="<?php echo $row['e_location'] ?>" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Upload Image</label>
                    <input type="file" name="edit_event_image" id="edit_event_image" value="<?php echo $row['e_image'] ?>" class="form-control">
                </div>
            </div>
            <div class="float-right">
                <button type="submit" name="update_event_btn" class="btn btn-primary">Update Event</button>
                <a href="viewevents.php" class="btn btn-danger">Cancel</a>
            </div>
    
        </form>
       
   </div>
</div>


    <?php   #
    }
  }
  ?>
   </div>
</div>















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