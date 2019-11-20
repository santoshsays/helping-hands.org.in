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

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Volunter</h1> -->
<!-- <p class="mb-4">We maintain details of each and every volunter. -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Our Volunter</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php
      $query="SELECT * FROM donation";
      $query_run=mysqli_query($con,$query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Amount</th>
            <th>Purpose</th>
            <th>Date</th>
            <th>Pay ID</th>
            <th>Message</th>
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
                  <td><?php echo $row['d_name']; ?></td>
                  <td><?php echo $row['d_email']; ?></td>
                  <td><?php echo $row['d_phone']; ?></td>
                  <td><?php echo $row['d_amount']; ?></td>
                  <td><?php echo $row['d_purpose']; ?></td>
                  <td><?php echo $row['d_date']; ?></td>
                  <td><?php echo $row['d_payid']; ?></td>
                  <td>
                    <form action="sendthanksmessage.php" method="POST">
                    <input type="hidden" name="send_d_id" value="<?php echo $row['d_id'];?>">
                    <button  type="submit" name="send_thanks_message"class ="btn btn-primary">Message</button>
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
