<?php
include('message.php');

if(isset($_POST['delete_message_btn']))
{
    $del_mesg_id=$_POST['del_message_id'];

    $query="DELETE FROM user_message WHERE message_id='$del_mesg_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
    ?>
     <!-- Success Modal -->
        <div class="modal fade" id="modaldeletemsgsuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="delModalCenterTitle">Message Deleted</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well Done !></p>
                      <p>Message is Successfully Deleted !</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'message.php'";>OKay</button>
                  </div>
                  </div>
              </div>
        </div>

        <!-- Failure Modal ---  -->
        <div class="modal fade" id="modaldeletemsgfailure" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="delModalCenterTitle">Deletion Failure</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Opps !></p>
                      <p>Information is not successfully Deleted. Try again Later!</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'message.php'";>Try Again</button>
                  </div>
                  </div>
              </div>
        </div>
        
        <?php 
          echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modaldeletemsgsuccess').modal('show');
          });
          </script>";

    }
    else
    {
        echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modaldeletemsgfailure').modal('show');
          });
          </script>";
        
    }
}
?>

