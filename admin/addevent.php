<?php
include('includes/header.php'); 
include('security.php');
?>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php
include('includes/navbar.php');
?>
<div class="container-fluid">
    <br/>
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Adding Events</h6>
  </div>
  <div class="card-body">
        <form action="addeventcode.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="add_event_id" >
            
            <div class="form-group ">
                <label>Events Name</label>
                <input type="text" name="add_event_title" class="form-control">
            </div>
            
            <div class="row">
                <div class="form-group col-4">
                    <label>Event Date</label>
                    <input type="date" name="add_event_date"  class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Event Starting Time</label>
                    <input type="time" name="add_event_stime"  class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Event Ending Time</label>
                    <input type="time" name="add_event_etime"  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label>Events Location</label>
                    <input type="text" name="add_event_location" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label>Upload Image</label>
                    <input type="file" name="add_event_image" id="add_event_image"  class="form-control">
                </div>
            </div>
            <div class="float-right">
                <button type="submit" name="add_event_btn" class="btn btn-primary">Add Event</button>
                <a href="viewevents.php" class="btn btn-danger">Cancel</a>
            </div>
    
        </form>
       
   </div>
</div>

