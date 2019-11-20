<?php
include('editteams.php');
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
if(isset($_POST['teams_update_btn']))
{
    $edit_teams_id=$_POST['edit_teams_id'];
    $edit_teams_name=$_POST['edit_teams_name'];
    $edit_teams_desg=$_POST['edit_teams_desg'];
    $edit_teams_fb=$_POST['edit_teams_fb'];
    $edit_teams_insta=$_POST['edit_teams_insta'];
    $edit_teams_wsp=$_POST['edit_teams_wsp'];
    $edit_teams_image=$_FILES['edit_teams_image']['name'];

    $query="UPDATE teams SET names='$edit_teams_name',
          designation='$edit_teams_desg', facebook='$edit_teams_fb',
          instagram='$edit_teams_insta', whatsaap='$edit_teams_wsp',image='$edit_teams_image'
                WHERE id='$edit_teams_id'";
    $query_run =mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["edit_teams_image"]["tmp_name"],"../uploads/teams/".$_FILES["edit_teams_image"]["name"]);
          //$_SESSION['success'] =  "Data  Added ";
         // header('Location: volunter.php');
          ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Teams Updation Success</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well done !</p>
                      <p>Information Updated Successfully.!</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewteams.php'"; data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewteams.php'";>OK</button>
                  </div>
                  </div>
              </div>
          </div>
          <!-- failure modal -->
          <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalCenterTitle">Teams Updation Failure</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Information Updating Failed .Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewteams.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'editteams.php'";>Try Again</button>
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