<?php
include('includes/header.php'); 
include('security.php');
?>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php
include('includes/navbar.php');
?>
<div class="container-fluid">
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Adding Volunter</h6>
  </div>
  <div class="card-body">


    <form action="addvoluntercode.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="add_volunter_id" >
        
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="add_volunter_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="add_volunter_email" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="add_volunter_phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="add_volunter_address"  class="form-control">
        </div>
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="add_reg_image" id="add_reg_image"  class="form-control">
        </div>
        <button type="submit" name="add_volunter_btn" class="btn btn-primary">Add Members</button>
        <a href="volunter.php" class="btn btn-danger">Cancel</a>
        
    </form>
       
   </div>
</div>

