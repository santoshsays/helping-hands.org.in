<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
  <!-- <i class="fad fa-hands-helping"></i> -->
  <i class="fas fa-hands-helping"></i>
  <!-- <img src="../img/hands-helping-solid.svg" width="40px" height="40px"/> -->
  </div>
  <div class="sidebar-brand-text mx-4">Helping<br/>Hands</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Donations
</div>

<!-- Nav Item - Charts -->
<li class="nav-item active">
  <a class="nav-link" href="viewdonation.php">
    <i class="fas fa-dollar-sign"></i>
    <span>Our Donations</span></a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
  Events
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item active">
  <a class="nav-link collapsed" href="viewevents.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-clipboard-list"></i>
    <span>Our Events</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="viewevents.php">View Events</a>
      <a class="collapse-item" href="addevent.php">Add Events</a>
      
    </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Teams
</div>

<li class="nav-item active">
  <a class="nav-link collapsed" href="viewteams.php" data-toggle="collapse" data-target="#collaoseteams" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-users"></i>
    <span>Our Teams</span>
  </a>
  <div id="collaoseteams" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="viewteams.php">View Teams</a>
      <a class="collapse-item" href="addteams.php">Add Teams</a>
      
    </div>
  </div>
</li>


<li class="nav-item active">
  <a class="nav-link" href="volunter.php" data-toggle="collapse" data-target="#collapsemembers" aria-expanded="true" aria-controls="collapsemembers">
    <i class="fas fa-people-carry"></i>
    <span>Our Volunter</span></a>
    <div id="collapsemembers" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
     
      <a class="collapse-item" href="volunter.php">View Memebers</a>
      <a class="collapse-item" href="addvolunter.php">Add Memebers</a>
      
    </div>
  </div>
</li>
<!-- Divider -->

<hr class="sidebar-divider">
<!-- Nav Item - Pages Collapse Menu -->
<div class="sidebar-heading">
  Message
</div>
<li class="nav-item active">
  <a class="nav-link" href="message.php">
    <i class="fas fa-comments"></i>
    <span>Our Messages</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
  Settings
</div>
<!-- Nav Item - Tables -->
<li class="nav-item active">
  <a class="nav-link" href="#"data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-cog"></i>
    <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                <?php  
                //include('security.php');
                $email_login=$_SESSION['username'];
                $sql ="SELECT  id,username,image from admin_user where email ='$email_login'";
                $query=mysqli_query($con,$sql);
                if(mysqli_num_rows($query)>0)
                {
                  while($row= mysqli_fetch_assoc($query))
                    {
                      echo $row['username'];
                      $user_id =$row['id'];
                
                ?>
                </span>
                <?php echo '<img class="img-profile rounded-circle" src="../uploads/admin/'.$row['image'].'">' ?>
                <!-- <img class="img-profile rounded-circle" src="../img/testimonials/santosh.jpg"> -->
              </a> 
              <?php
                  }
                 }
              ?>
              <!-- Dropdown - User Information -->
             
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <form action="viewprofile.php" method="POST" enctype="multipart/form-data">
                  <?php 
                       // session_start();
                        //include('../security.php');  
                        $email_login=$_SESSION['username'];          
                       
                    ?>
                    <input type="hidden" name="view_user_id" value="<?php echo $user_id;?>">
                    <button type="submit" name="view_profile_btn" class="dropdown-item" >
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </button>
                  </form>
                  <!-- <div class="dropdown-divider"></div>
                  <form action="changepassword.php" method="post" enctype="multipart/form-data">
                      <button type="submit" name="view_setting_btn" class="dropdown-item" href="settings">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </button>
                  </form> -->
                

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST">

            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>
