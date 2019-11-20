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
  if(isset($_POST['edit_teams_btn']))
  {
      $id=$_POST['edit_teams_id'];
      $query="SELECT * FROM teams WHERE id='$id'";
      $query_run =mysqli_query($con,$query);
      foreach ($query_run as $row)
      {
      ?>
        <form action="teams_editcode.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="edit_teams_id" value="<?php echo $row['id'] ?>">
            
            <div class="row">
            <div class="form-group col-6">
                <label>Name</label>
                <input type="text" name="edit_teams_name" value="<?php echo $row['names'] ?>"class="form-control" required>
            </div>
            <div class="form-group col-6">
                <label>Deginations</label>
                <input type="text" name="edit_teams_desg" value="<?php echo $row['designation'] ?>"class="form-control" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-6">
                <label>Facebook</label>
                <input type="text" name="edit_teams_fb" value="<?php echo $row['facebook'] ?>"class="form-control">
            </div>
            <div class="form-group col-6">
                <label>Instagram</label>
                <input type="text" name="edit_teams_insta" value="<?php echo $row['instagram'] ?>" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-6">
                <label>Whatsapp</label>
                <input type="text" name="edit_teams_wsp" value="<?php echo $row['whatsaap'] ?>" class="form-control">
            </div>
            <div class="form-group col-6">
                <label>Upload Image</label>
                <input type="file" name="edit_teams_image" id="edit_teams_image" value="<?php echo $row['image'] ?>" class="form-control" required>
            </div>
        </div>

        <a href="viewteams.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="teams_update_btn" class="btn btn-primary">Update</button>
        </form>
       
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