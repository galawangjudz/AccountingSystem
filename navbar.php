 <!-- Left side column. contains the logo and sidebar -->
 <?php 
 
 $usertype = $_SESSION['user_type'];

?>
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <br>
        <!-- Menu 0.1 -->
        <li class="treeview">
          <a href="index.php?page=dashboard"><i class="fa fa-th nav-dashboard"></i><span>Dashboard</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=customer-list"><i class="fa fa-male"></i><span>Clients</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=list-sm"><i class="fa fa-check-square"></i><span>Pending RA</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=list-revision"><i class="fa fa-check-square"></i><span>Revision</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=ra-list"><i class="fa fa-certificate"></i><span>Ra Approved List</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=reservation-list"><i class="fa fa-calendar-check"></i><span>Reservation</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=manage-loan-calcu"><i class="fa fa-calculator"></i><span>Loan Calculator</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=ca-list"><i class="fa-solid fa-ruble"></i><span>&nbsp;&nbsp;Credit Assestment</span></a>
        </li>
        <li class="treeview">
          <a href="index.php?page=ca-checking"><i class="fa-solid fa-ruble"></i><span>&nbsp;&nbsp;Credit Assestment 2</span></a>
        </li>
       
        <?php if ($usertype == 'IT Admin'){ ?>
       
        <!-- Menu 2 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-clipboard-list"></i><span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=project-list"><i class="fa fa-map-location-dot"></i>Manage Project Site</a></li>
            <li><a href="index.php?page=lot-list"><i class="fa fa-square"></i>Manage Lots</a></li>
            <li><a href="index.php?page=house-list"><i class="fa fa-house"></i>Manage House</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-file"></i><span>Maintenance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=agent-list"><i class="fa fa-id-card-clip"></i>Manage Agents</a></li>
            <li><a href="index.php?page=user-list"><i class="fa fa-user"></i><span>System Users</span></a></li>
          </ul>
       </li>
    
        <?php } ?>  
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
<section class="content">
<div class="panel-body form-group form-group-sm" id="main_div1"></div>
  
    <!-- Your Page Content Here -->
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>