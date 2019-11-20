<?php
include('editevent.php');
//include('security.php');
include('includes/script.php');
?>
<!-- Bootstrap link -->
<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
<!----------------Javascript link------------>
<script src="../vendors/jquery-3.4.1.min.js"></script>
<script src="../vendors/popper.min.js"></script>
<script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
	
<?php
//code for updating volunter from admin
if(isset($_POST['update_event_btn']))
{
    $edit_event_id=$_POST['edit_event_id'];
    $edit_event_name=$_POST['edit_event_title'];
    $edit_event_date=$_POST['edit_event_date'];
    $edit_event_stime=$_POST['edit_event_stime'];
    $edit_event_etime=$_POST['edit_event_etime'];
    $edit_event_location=$_POST['edit_event_location'];
    $edit_event_image=$_FILES['edit_event_image']['name'];

    $query="UPDATE event SET e_title='$edit_event_name',
          e_date='$edit_event_date', e_start_time='$edit_event_stime',
          e_end_time='$edit_event_etime', e_location='$edit_event_location',
          e_image='$edit_event_image'
            WHERE e_id='$edit_event_id'";
    $query_run =mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["edit_event_image"]["tmp_name"],"../uploads/events/".$_FILES["edit_event_image"]["name"]);
          //$_SESSION['success'] =  "Data  Added ";
         // header('Location: volunter.php');
          ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Event Updation Success</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well done !</p>
                      <p>Information Updated Successfully.!</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewevents.php'";>OK</button>
                  </div>
                  </div>
              </div>
          </div>
          <!-- failure modal -->
          <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalCenterTitle">Event Updation Failure</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Information Updating Failed .Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewevents.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'editevent.php'";>Try Again</button>
                </div>
                </div>
            </div>
          </div>
        <?php 
        echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modalvoluntersuccess').modal('show');
          });
          </script>";
        
    }
    
    else
    {
       // $_SESSION['status']='Data not added';
       // header('Location: volunter.php'); 
       echo "<script type='text/javascript'>
       $(document).ready(function(){
       $('#modalvolunterfailure').modal('show');
       });
       </script>";
     
    }
}    
?>