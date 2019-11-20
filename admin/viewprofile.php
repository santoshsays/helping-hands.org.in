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
    <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
  </div>

<?php
  if(isset($_POST['view_profile_btn']))
  {
      $admin_id=$_POST['view_user_id'];
      $query="SELECT * FROM admin_user WHERE id='$admin_id'";
      $query_run =mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)>0)
     {
        while($row=mysqli_fetch_assoc($query_run))
        {
         ?>
          <div class="card-body"><br/><br/>
                <form action="changepassword.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>" >
                    
                    <div class="float-right">
                        <?php echo '<img src="../uploads/admin/'.$row['image'].'" width="200px;" height="200px;" style=" border-radius: 50%;">' ?>
                        
                    </div>
                    <div class="col-7">
                        <div class="form-group col-8">
                            <label> Username</label>
                            <input type="text" name="edit_username" value="<?php echo $row['username'] ?>"class="form-control" >
                        </div>
                    
                        <div class="form-group col-8">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" readonly>
                            <label><span style="color:red;">email</span> can not be changed for <span style="color:red;">security reason</span>security reason</label>
                        </div>
                            
                        
                        <div class="form-group col-8">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control">
                        </div>
  
                    </div>
                     <div class="float-right">
                        <button type="submit" name="change_password_btn" class="btn btn-primary">Change Password</button>
                        <a href="index.php" class="btn btn-danger">Return</a>
                     </div>
                </form>
            </div>
         <?php   
        }
     }
}
  ?>
</div>







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
