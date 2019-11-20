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
  if(isset($_POST['edit_volunter_btn']))
  {
      $id=$_POST['edit_volunter_id'];
      $query="SELECT * FROM volunter WHERE id='$id'";
      $query_run =mysqli_query($con,$query);
      foreach ($query_run as $row)
      {
      ?>
        <form action="volunter_editcode.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_volunter_id" value="<?php echo $row['id'] ?>">
        
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="edit_volunter_name" value ="<?php echo $row['name'] ?>"class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="edit_volunter_email"value ="<?php echo $row['email'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="edit_volunter_phone"  value="<?php echo $row['mobile'] ?>"class="form-control">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="edit_volunter_address" value="<?php echo $row['address'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="reg_image" id="reg_image" value="<?php echo $row['image'] ?>" class="form-control">
        </div>

        <a href="volunter.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="volunter_update_btn" class="btn btn-primary">Update</button>
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