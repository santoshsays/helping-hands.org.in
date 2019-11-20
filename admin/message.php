<?php
include('includes/header.php');
include('security.php'); ?>
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php
include('includes/navbar.php');

?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Message</h1>
<!-- <p class="mb-4">We receive each and every message from our visitors and get back a respond to them.</p> -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Received Messages</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php
      $query="SELECT * FROM user_message";
      $query_run=mysqli_query($con,$query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
           
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Phone</th>
            <th>Message</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while($row= mysqli_fetch_assoc($query_run))
                {
                    ?>
                <tr>
                  
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['message']; ?></td>
                  <td>
                    <form action="delmessage.php" method="POST">
                      <input type="hidden" name="del_message_id" value="<?php echo $row['message_id'];?>">
                      <button  type="submit" name="delete_message_btn"class ="btn btn-danger">DELETE</button>
                    </form>
                   
                  </td>
                </tr>
                <?php
                }
              }
              else
              {
                echo"No Record Found";
              }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


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
