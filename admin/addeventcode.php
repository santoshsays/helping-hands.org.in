<?php
//include('security.php');
include('addevent.php');
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
if(isset($_POST['add_event_btn']))
{
    $add_event_id=$_POST['add_event_id'];
    $add_event_title=$_POST['add_event_title'];
    $add_event_date=$_POST['add_event_date'];
    $add_event_stime=$_POST['add_event_stime'];
    $add_event_etime=$_POST['add_event_etime'];
    $add_event_location=$_POST['add_event_location'];
    $add_event_image=$_FILES['add_event_image']['name'];

    if(file_exists("uploads/events/" .$_FILES["add_event_image"]["name"]))
    {
        $store=$_FILES["add_event_image"]["name"];
        $_SESSION['status']= "Image already exists.'.$store.'";
        ?>
        <!-- Image already Exist modal -->
        <div class="modal fade" id="modalImagealreadyexist" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalImagealreadyexist">Image Already Exist</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Images you uploading is already there.Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'index.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'bevolunter.php'";>Try Again</button>
                </div>
                </div>
            </div>
          </div>
        <?php
       
        echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modalImagealreadyexist').modal('show');
          });
          </script>";
      
    }
    else 
    {
        $query = "INSERT INTO event (e_title,e_image,e_date,e_start_time,e_end_time,e_location) 
        VALUES ('$add_event_title','$add_event_image','$add_event_date','$add_event_stime','$add_event_etime','$add_event_location')";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
          move_uploaded_file($_FILES["add_event_image"]["tmp_name"],"../uploads/events/".$_FILES["add_event_image"]["name"]);
          // $_SESSION['success'] =  "Data  Added ";
          // header('Location: index.php');
        ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Adding Event Success</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well done !</p>
                      <p>Events Added Succesfully !</p>
                     
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewevents.php'";>Okay</button>
                  </div>
                  </div>
              </div>
          </div>
          <!-- failure modal -->
          <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalCenterTitle">Adding Events Failure</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Event Adding Failed.Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewevents.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'addevents.php'";>Try Again</button>
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
            echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#modalvolunterfailure').modal('show');
            });
            </script>";
        }
    }
}

?>
