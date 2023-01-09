
<!-- <style>
	nav#sidebar {
    background: url(../assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;}
</style> -->
<?php 
$usertype = $_SESSION['user_type'];
?>
<nav id="sidebar" class='mx-lt-5' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=booked" class="nav-item nav-booked"><span class='icon-field'><i class="fa fa-book"></i></span> Booked </a>
				<a href="index.php?page=check_in" class="nav-item nav-check_in"><span class='icon-field'><i class="fa fa-sign-in-alt"></i></span> Check In </a>
				<a href="index.php?page=check_out" class="nav-item nav-check_out"><span class='icon-field'><i class="fa fa-sign-out-alt"></i></span> Check Out </a>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Room Category List</a>
				<a href="index.php?page=rooms" class="nav-item nav-rooms"><span class='icon-field'><i class="fa fa-bed"></i></span> Rooms </a>
				<?php if($_SESSION['user_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Site Settings</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>


<?php if ($usertype == 'IT Admin' || $usertype == 'Agent' || $usertype == 'SOS' || $usertype == 'COO'){ ?>
       <!--  <li class="treeview">
          <a href="index.php?page=customer-list"><i class="fa fa-users"></i> <span>Clients</span></a>
        </li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-clipboard-list"></i><span>Sales And Marketing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=customer-list"><i class="fa fa-male"></i>Clients</a></li>
            <li><a href="index.php?page=list-sm"><i class="fa fa-check-square"></i>Verification</a></li>
            <li><a href="index.php?page=revision-list"><i class="fa fa-square"></i>Revision</a></li>
            <li><a href="index.php?page=ra-list"><i class="fa fa-certificate"></i>Ra Approved List</a></li>
          </ul>
        </li>
   
        <li class="treeview">
          <a href="#"><i class="fa fa-female"></i><span>Chief Operating Officer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=coo-list"><i class="fa fa-file-archive-o"></i>For Approval</a></li>
            <li><a href="index.php?page=ra-list"><i class="fa fa-certificate"></i>Ra Approved List</a></li>
          </ul>
        </li>



        <?php } ?>

        <?php if ($usertype == 'IT Admin' || $usertype == 'Cashier'){ ?>

        <li class="treeview">
          <a href="#"><i class="fa fa-file"></i><span>Cashier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=reservation-list"><i class="fa fa-calendar-check"></i><span>Reservation</span></a></li>
            <li><a href="index.php?page=ra-list"><i class="fa fa-certificate"></i>Ra Approved List</a></li>
          </ul>
        </li>

        <?php } ?>
         <!-- Menu 1 -->
         <?php if ($usertype == 'IT Admin' || $usertype == 'CA'){ ?>


        <li class="treeview">
          <a href="#"><i class="fa fa-file"></i><span>Credit Assessment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=ca-list"><i class="fa-solid fa-ruble"></i><span>&nbsp;&nbsp;For Approval</span></a></li>
            <li><a href="index.php?page=ra-list"><i class="fa fa-certificate"></i>Ra Approved List</a></li> 
          </ul>
       </li>
     
        <?php } ?>