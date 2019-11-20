<?php
// include('security.php'); 
 include('includes/script.php');
include('changepassword.php');
?>
<!-- Bootstrap link -->
<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
<!----------------Javascript link------------>
<script src="../vendors/jquery-3.4.1.min.js"></script>
<script src="../vendors/popper.min.js"></script>
<script src="../vendors/bootstrap/js/bootstrap.min.js"></script>

<?php
if(isset($_POST['update_password_btn']))
{

    $update_id=$_POST['update_id'];
    $new_password=$_POST['new_pass'];
    $re_password=$_POST['re_new_pass'];

    $old_password=$_POST['old_pass'];
    $db_password=$_POST['update_old_pass'];

    if($new_password == $re_password)
    {
        if($old_password == $db_password)
        {    

            $sql ="UPDATE admin_user set password ='$new_password' where id='$update_id' ";
            $query_run =mysqli_query($con,$sql);
            if($query_run)
            {
                ?>
                <!-- Success Modal -->
                <div class="modal fade" id="modalupdatesuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sucessModalCenterTitle">Update Success</h5>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color:crimson;font-size:16px; font-weight:bold;">Well done !</p>
                            <p>Information Updated Successfully.!</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" onclick="location.href = 'index.php'";data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary" onclick="location.href = 'index.php'";>OK</button>
                        </div>
                        </div>
                    </div>
                </div>
                <?php 
                    echo "<script type='text/javascript'>
                    $(document).ready(function(){
                    $('#modalupdatesuccess').modal('show');
                    });
                    </script>";
                   // session_destroy();
            }
        }
        else
        {
            ?>
             <!-- old pass failure Modal -->
            <div class="modal fade" id="modalupdatefailure" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sucessModalCenterTitle">Invalid Inputs </h5>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color:crimson;font-size:16px; font-weight:bold;">Opps !</p>
                            <p>Old Password Does not match .!</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" onclick="location.href = 'index.php'";data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewprofile.php'";>Try Again</button>
                        </div>
                        </div>
                    </div>
            </div>
                <?php 
                    echo "<script type='text/javascript'>
                    $(document).ready(function(){
                    $('#modalupdatefailure').modal('show');
                    });
                    </script>";
                    //session_destroy();
        }
    }
    else if($new_password != $re_password)
    {
        ?>
             <!-- no password match failure Modal -->
            <div class="modal fade" id="modalnomatchfailure" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sucessModalCenterTitle">Invalid Inputs </h5>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color:crimson;font-size:16px; font-weight:bold;">Opps !</p>
                            <p>Password and Retype Password Does not match .!</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewprofile.php'";data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary" onclick="location.href = 'changepassword.php'";>Try Again</button>
                        </div>
                        </div>
                    </div>
            </div>

            <?php 
                    echo "<script type='text/javascript'>
                    $(document).ready(function(){
                    $('#modalnomatchfailure').modal('show');
                    });
                    </script>";
        
    }

}
session_destroy()
?>