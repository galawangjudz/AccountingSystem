<?php
  include('functions.php');
  include_once("includes/config.php");
?>
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="title_head">CSR</div>
      <div class="dashboard_container_top">
        <div class="row">
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?php 
                  $result_approved = mysqli_query($mysqli, 'SELECT COUNT(coo_approval) AS csr_approved FROM t_csr WHERE coo_approval = 1'); 
                  $row = mysqli_fetch_assoc($result_approved); 
                  $approved = $row['csr_approved'];
                  echo $approved;
                  ?></h3>
                <p>Approved</p>
              </div>
              <div class="icon">
              <a href="index.php?page=csr-list&category_id=1"><i class="fa-sharp fa-solid fa-check-to-slot"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?php 
                  $result_pending = mysqli_query($mysqli, 'SELECT COUNT(c_verify) AS csr_pending FROM t_csr WHERE c_verify = 0'); 
                  $row = mysqli_fetch_assoc($result_pending); 
                  $pending = $row['csr_pending'];
                  echo $pending;
                  ?></h3>
                <p>Pending</p>
              </div>
              <div class="icon">
              <a href="index.php?page=csr-list&category_id=0"><i class="fa-sharp fa-solid fa-clock"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
              <h3><?php 
                  $result_disapproved = mysqli_query($mysqli, 'SELECT COUNT(coo_approval) AS csr_disapproved FROM t_csr WHERE coo_approval = 0'); 
                  $row = mysqli_fetch_assoc($result_disapproved); 
                  $disapproved = $row['csr_disapproved'];
                  echo $disapproved;
                  ?></h3>
                <p>Disapproved</p>
              </div>
              <div class="icon">
              <a href="index.php?page=csr-list&category_id=3"><i class="fa-solid fa-circle-xmark"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
      <!-- /.row -->
      <br>
      <!-- 2nd row -->
      <div class="title_head">LOT</div>
      <div class="dashboard_container_top">
        <div class="row">
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?php 
                  $result_reserved = mysqli_query($mysqli, 'SELECT COUNT(c_status) AS reserved FROM t_lots WHERE c_status = "Reserved"'); 
                  $row = mysqli_fetch_assoc($result_reserved); 
                  $reserved = $row['reserved'];
                  echo $reserved;
                  ?></h3>
                <p>Reserved</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-calendar-check"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3><?php 
                  $result_prereserved = mysqli_query($mysqli, 'SELECT COUNT(c_status) AS prereserved FROM t_lots WHERE c_status = "Pre-reserved"'); 
                  $row = mysqli_fetch_assoc($result_prereserved); 
                  $prereserved = $row['prereserved'];
                  echo $prereserved; 
                  ?></h3>
                <p>Pre-reserved</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-calendar"></i>
              </div>  
            </div>
          </div>
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
              <h3><?php 
                  $result_available = mysqli_query($mysqli, 'SELECT COUNT(c_status) AS available FROM t_lots WHERE c_status = "Available"'); 
                  $row = mysqli_fetch_assoc($result_available); 
                  $available = $row['available'];
                  echo $available;
                  ?></h3>
                <p>Available</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-circle-check"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
<?php
	include('footer.php');
?>
