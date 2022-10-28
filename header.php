<?php
	//check login
	include("session.php");
?>


<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Accounting Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.css">
 
  <link rel="stylesheet" href="css/skin-green.css">
  
  	<!-- JS -->
  <script src="https://kit.fontawesome.com/5107b89571.js" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--   <script src="//cdn.atatables.net/1.10.7/js/jquery.dataTables.js"></script>  -->
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>
	
	<!-- AdminLTE App -->
	<script src="js/app.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">

</head>
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
              <span class="hidden-xs"><?php echo $_SESSION['login_username'];?></span>
            </a>
            <ul class="dropdown-menu">
             <!-- Drop down list-->
              <li><a href="logout.php" class="btn btn-default btn-flat">Log out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <br>
        <!-- Menu 0.1 -->
        <li class="treeview">
          <a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <!-- Menu 1 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Contract</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="csr-create.php"><i class="fa fa-plus"></i>Create Contract</a></li>
            <li><a href="csr-list.php"><i class="fa fa-cog"></i>Manage Contracts</a></li>
            <!-- <li><a href="#" class="download-csv"><i class="fa fa-download"></i>Download CSV</a></li> -->
          </ul>
        </li>
          <!-- Menu 1.1 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Reservation Application</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ra-create.php"><i class="fa fa-plus"></i>Create Reservation</a></li>
            <li><a href="ra-list.php"><i class="fa fa-file-o"></i>Manage Applications</a></li>
            <!-- <li><a href="#" class="download-csv"><i class="fa fa-download"></i>Download CSV</a></li> -->
          </ul>
         
        </li>
        <!-- Menu 2 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-archive"></i><span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="lot_nav"><a href="lot-add.php"><i class="fa fa-plus"></i>Add Lot</a></li>
            <li><a href="lot-list.php"><i class="fa fa-cog"></i>Manage Lots</a></li>
          </ul>
          <ul class="treeview-menu">
            <li id="proj_nav"><a href="project-add.php"><i class="fa fa-plus"></i>Add Project Site</a></li>
            <li><a href="project-list.php"><i class="fa fa-cog"></i>Manage Project Site</a></li>
          </ul>
          <ul class="treeview-menu">
            <li id="house_nav"><a href="house-add.php"><i class="fa fa-plus"></i>Add House</a></li>
            <li><a href="house-list.php"><i class="fa fa-cog"></i>Manage House</a></li>
          </ul>
        </li>
        <!-- Menu 3 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i><span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer-add.php"><i class="fa fa-user-plus"></i>Add Client</a></li>
            <li><a href="customer-list.php"><i class="fa fa-cog"></i>Manage Clients</a></li>
          </ul>
        </li>
        
        <!-- Menu 4 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i><span>System Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user-add.php"><i class="fa fa-plus"></i>Add User</a></li>
            <li><a href="user-list.php"><i class="fa fa-cog"></i>Manage Users</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i><span>Agents and Commissions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agent-add.php"><i class="fa fa-plus"></i>Add Agent</a></li>
            <li><a href="agent-list.php"><i class="fa fa-cog"></i>Manage Agents</a></li>
            <li><a href="commission-list.php"><i class="fa fa-cog"></i>Commissions</a></li>
          </ul>
        </li>        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->


