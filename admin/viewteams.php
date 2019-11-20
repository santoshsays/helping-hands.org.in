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
    <h6 class="m-0 font-weight-bold text-primary">Our Teams</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php
      $query="SELECT * FROM teams";
      $query_run=mysqli_query($con,$query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Degination</th>
            <th>Facebook</th>
            <th>Instgram</th>
            <th>whatsapp</th>
            <th>Image</th>
            <th>EDIT</th>
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
                  <td><?php echo $row['names']; ?></td>
                  <td><?php echo $row['designation']; ?></td>
                  <td><?php echo $row['facebook']; ?></td>
                  <td><?php echo $row['instagram']; ?></td>
                  <td><?php echo $row['whatsaap']; ?></td>
                  <td><?php echo '<img src="../uploads/teams/'.$row['image'].'" width="100px;" height="100px;">' ?></td>
                  <td>
                    <form action="editteams.php" method="POST">
                    <input type="hidden" name="edit_teams_id" value="<?php echo $row['id'];?>">
                    <button  type="submit" name="edit_teams_btn"class ="btn btn-primary">EDIT</button>
                    </form>
                  </td>

                  <td>
                    <form action="deleteteams.php" method="POST">
                      <input type="hidden" name="del_teams_id" value="<?php echo $row['id'];?>">
                      <button  type="submit" name="delete_teams_btn"class ="btn btn-danger">DELETE</button>
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
