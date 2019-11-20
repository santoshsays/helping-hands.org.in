<?php
session_start();
include('database/dbconfig.php');
include('bevolunter.php');
include('include/script.php');

if(isset($_POST['bevolunter_btn']))
{
    $name = $_POST['reg_first'];
    $email = $_POST['reg_email'];
    $mobile = $_POST['reg_mobile'];
    $address = $_POST['reg_address'];
    $image=$_FILES['reg_images']['name'];

    $_SESSION['reg_first'] =$name ;
    $_SESSION['reg_email']=$email;
    $_SESSION['reg_mobile']=$mobile;
    $_SESSION['reg_address']=$address;
   

    if(file_exists("uploads/" .$_FILES["reg_images"]["name"]))
    {
        $store=$_FILES["reg_images"]["name"];
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
        //code for checking unique user from each email and phone
        $sql_check= "SELECT * from volunter WHERE email='$email' OR mobile='$mobile'";
        $res_sql=mysqli_query($con,$sql_check);
        
        if(mysqli_num_rows($res_sql) > 0)
        {
         // user exists code 
        ?>
        <!-- User already Exist modal -->
        <div class="modal fade" id="modaluseralreadyexist" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalImagealreadyexist">Volunter Already Exist</h5>
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry &nbsp<?php echo $name; ?>&nbsp !</p>
                    <p> User already exist with given email or phone. </p>
                    
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
          $('#modaluseralreadyexist').modal('show');
          });
          </script>";

        }
        else 
        {
            //no user exist then do insertions

            $query = "INSERT INTO volunter (name,email,mobile,address,image) VALUES ('$name','$email','$mobile','$address','$image')";
            $query_run = mysqli_query($con, $query);
            if($query_run)
            {
                move_uploaded_file($_FILES["reg_images"]["tmp_name"],"uploads/".$_FILES["reg_images"]["name"]);
                // $_SESSION['success'] =  "Data  Added ";
                // header('Location: index.php');
                ?>
                <!-- Success Modal -->
                <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sucessModalCenterTitle">Volunter Success</h5>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color:crimson;font-size:16px; font-weight:bold;">Welcome &nbsp<?php echo $name; ?></p>
                            <p>You are members of Helping Hands now.We will reach after you soon!</p>
                            <p>Have a great day ahead.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" onclick="location.href = 'index.php'"; data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary" onclick="location.href = 'volunter_profile.php'";>View Id Card</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- failure modal -->
                <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="failureModalCenterTitle">Volunter Failure</h5>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                            <p>Your Data is not sent Sucessfully.Try again Later ! </p>
                            
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
}

?>
