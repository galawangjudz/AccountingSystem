

<div class="header"></div>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
     <!--Logo -->
    <div class="logo">
    <div class="alsc"><img src="images/smallest.png"></div>
    <div class="small">ALSC Web Application</div>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
     
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="https://pcrt.crab.org/images/default-user.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
              <?php echo $_SESSION['user_type'];?> - <?php echo $_SESSION['username'];?></span>   
            </a>
            <ul class="dropdown-menu">
             <!-- Drop down list-->
              <li><a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
              <li><a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
<!--               <li><a href="?page=logout" class="btn btn-default btn-flat">Log out</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  
<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['user_id'] ?>&mtype=own")
  })
</script>
  


