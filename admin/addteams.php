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
    <h6 class="m-0 font-weight-bold text-primary">Adding Teams</h6>
  </div>
  <div class="card-body">


    <form action="addteamscode.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="add_teams_id" >
        <div class="row">
        <div class="form-group col-6">
            <label>Name</label>
            <input type="text" name="add_teams_name" class="form-control" required>
        </div>
        <div class="form-group col-6">
            <label>Deginations</label>
            <input type="text" name="add_teams_desg" class="form-control" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
            <label>Facebook</label>
            <input type="text" name="add_teams_fb" class="form-control">
        </div>
        <div class="form-group col-6">
            <label>Instagram</label>
            <input type="text" name="add_teams_insta"  class="form-control">
        </div>
        </div>
       <div class="row">
       <div class="form-group col-6">
            <label>Whatsapp</label>
            <input type="text" name="add_teams_wsp"  class="form-control">
        </div>
        <div class="form-group col-6">
            <label>Upload Image</label>
            <input type="file" name="add_teams_image" id="add_teams_image"  class="form-control" required>
        </div>
       </div>
        
        <button type="submit" name="add_teams_btn" class="btn btn-primary">Add Teams</button>
        <a href="viewteams.php" class="btn btn-danger">Cancel</a>
        
    </form>
       
   </div>
</div>

