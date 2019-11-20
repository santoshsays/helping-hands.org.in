<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <div class="row">
    <!-- total nyumebr of events -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Events </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                <?php  
              $e_query= "SELECT * FROM event";
              $e_result=mysqli_query($con,$e_query);
              $e_rows=mysqli_num_rows($e_result);
              ?>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $e_rows?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- total number of volunter -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Volunter</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php  
              $v_query= "SELECT COUNT(1) FROM volunter";
              $v_result=mysqli_query($con,$v_query);
              $v_rows=mysqli_num_rows($v_result);
              ?>
               <h5 style="font-weight:bold;">Total Volunter &nbsp<?php echo $v_rows ?> </h5>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-people-carry fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- total fund raised -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <?php
				    $query1 ="select SUM(d_amount) as total_amount from donation";
				    $query1_run =mysqli_query($con,$query1);
				    if(mysqli_num_rows($query1_run)>0)
                {
                  while($row= mysqli_fetch_assoc($query1_run))
                  {
                    $totaldonations =$row['total_amount'];
                  }
                }
              ?>
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Fund-raised</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rs.<?php echo $totaldonations;?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- total donation this month -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <?php
            $date  = date('Y-m');
            $query2 = "select SUM(d_amount) as this_month from donation WHERE  d_date LIKE '$date%'";
            $query2_run =mysqli_query($con,$query2);
				    if(mysqli_num_rows($query2_run)>0)
              {
                while($row= mysqli_fetch_assoc($query2_run))
                {
                    $this_months =$row['this_month'];
                }
              }
					  ?>
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Donation This Month</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rs. <?php echo $this_months;?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<?php
include('includes/script.php');
include('includes/footer.php');
?>
