<?php
include('includes/header.php'); 
include('security.php');
?>
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php
include('includes/navbar.php');
?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
  </div>

<?php
  if(isset($_POST['change_password_btn']))
  {
      $id=$_POST['edit_id'];
      $sql1 ="SELECT password FROM admin_user WHERE id=$id";
      $query1_run=mysqli_query($con,$sql1);
      if(mysqli_num_rows($query1_run)>0)
              {
                while($row= mysqli_fetch_assoc($query1_run))
                {
                    $dbpass =$row['password'];
                }
              }

      //$password=$_GET['edit_password'];
      
   ?>
            <div class="card-body"><br/><br/>
                <form action="change_spassword.php" method="post" >
                 <input type="hidden" name="update_id" value="<?php echo $id; ?>" >
                 <input type="hidden" name="update_old_pass" value="<?php echo $dbpass; ?>" >
                    
                    <div class="form-group col-4">
                        <label> Old Password</label>
                        <input type="password" name="old_pass" value="" class="form-control" required>
                    </div>
                   
                    <div class="form-group col-4">
                        <label>New Password</label>
                        <input type="password" name="new_pass" value="" class="form-control" required>
                    </div>
                        
                    
                    <div class="form-group col-4">
                            <label>Retype Password</label>
                            <input type="password" name="re_new_pass" value=""class="form-control" required>
                    </div>
                
                    <div class="float-right">
                        <button type="submit" name="update_password_btn" class="btn btn-primary">Update Password</button>
                        <a href="viewprofile.php" class="btn btn-danger">Return</a>
                    </div>
            
                </form>
            </div>


  
  <?php
  }
?>

<!-- End container-fluid -->


<?php
include('includes/script.php'); ?>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


<?php
include('includes/footer.php');
?>
