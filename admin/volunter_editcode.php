<?php
include('volunter_edit.php');
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
if(isset($_POST['volunter_update_btn']))
{
    $edit_volunter_id=$_POST['edit_volunter_id'];
    $edit_volunter_name=$_POST['edit_volunter_name'];
    $edit_volunter_email=$_POST['edit_volunter_email'];
    $edit_volunter_phone=$_POST['edit_volunter_phone'];
    $edit_volunter_address=$_POST['edit_volunter_address'];
    $edit_volunter_image=$_FILES['reg_image']['name'];

    $query="UPDATE volunter SET name='$edit_volunter_name',
          email='$edit_volunter_email', mobile='$edit_volunter_phone',
          address='$edit_volunter_address', image='$edit_volunter_image'
                WHERE id='$edit_volunter_id'";
    $query_run =mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["reg_image"]["tmp_name"],"../uploads/volunters/".$_FILES["reg_image"]["name"]);
          //$_SESSION['success'] =  "Data  Added ";
         // header('Location: volunter.php');
          ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Volunter Updation Success</h5>
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
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'volunter.php'";>OK</button>
                  </div>
                  </div>
              </div>
          </div>
          <!-- failure modal -->
          <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalCenterTitle">Volunter Updation Failure</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Information Updating Failed .Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'volunter.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'volunter_edit.php'";>Try Again</button>
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