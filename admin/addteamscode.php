<?php
include('addteams.php');
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
// code for adding volunteer from admin
if(isset($_POST['add_teams_btn']))
{
    $add_teams_id=$_POST['add_teams_id'];
    $add_teams_name=$_POST['add_teams_name'];
    $add_teams_desg=$_POST['add_teams_desg'];
    $add_teams_fb=$_POST['add_teams_fb'];
    $add_teams_insta=$_POST['add_teams_insta'];
    $add_teams_wsp=$_POST['add_teams_wsp'];
    $add_teams_image=$_FILES['add_teams_image']['name'];

    if(file_exists("uploads/teams/" .$_FILES["add_teams_image"]["name"]))
    {
        $store=$_FILES["add_teams_image"]["name"];
        $_SESSION['status']= "Image already exists.'.$store.'";
        //header('Location: volunter.php');
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
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewteams.php'";>Try Again</button>
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
        $query = "INSERT INTO teams (names,designation,facebook,instagram,whatsaap,image) 
        VALUES ('$add_teams_name','$add_teams_desg','$add_teams_fb','$add_teams_insta','$add_teams_wsp','$add_teams_image')";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
          move_uploaded_file($_FILES["add_teams_image"]["tmp_name"],"../uploads/teams/".$_FILES["add_teams_image"]["name"]);
         // $_SESSION['success'] =  "Data  Added ";
          //header('Location: volunter.php');
          ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Teams Success</h5>
                      <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Welcome !</p>
                      <p>Teams Added Successfully.!</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewteams.php'";data-dismiss="modal">Close</button>
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
                    <h5 class="modal-title" id="failureModalCenterTitle">Teams Failure</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Your Data is not sent Sucessfully.Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewteams.php'"; data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'addteams.php'";>Try Again</button>
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
         
         // $_SESSION['success'] =  "Data is Not Added";
         // header('Location: volunter.php');
          echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modalvolunterfailure').modal('show');
          });
          </script>";
        }
    }
}
?>