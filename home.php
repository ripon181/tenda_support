<?php include('db_connect.php') ?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
   <div class="col-12">
          <div class="card">
            <div class="card-body">
              Welcome <?php echo $_SESSION['login_name'] ?>!
            </div>
          </div>
      </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              

              <div class="info-box-content" style="background-image: linear-gradient(to right, #00048b , #0084b7); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">TOTAL TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;">
                  <?php echo $conn->query("SELECT * FROM tickets")->num_rows; ?>
                </span>
              </div>             
            </div>           
          </div>         
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">           
              <div class="info-box-content" style="background-image: linear-gradient(to right,#FF6347 , #FFA500 ); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">PENDING TICKETS</span>
                 <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;">
                  <?php echo $conn->query("SELECT * FROM tickets where status=0")->num_rows; ?>
                </span>
              </div>           
            </div>           
          </div>        
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">              
              <div class="info-box-content" style="background-image: linear-gradient(to right, #370c7c , #a900ff); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">PROCESSING TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=1")->num_rows; ?></span>
              </div>
            </div>            
          </div>          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #376405 , #09dd4a); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">DONE TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=2")->num_rows; ?></span>
              </div>             
            </div>            
          </div>  
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #680000 , #ff0000); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">CLOSED TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=3")->num_rows; ?></span>
              </div>             
            </div>            
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #686e00 , #e0ed00); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">TOTAL STAFF</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM staff")->num_rows; ?></span>
              </div>             
            </div>            
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #005f68 , #00c8db); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">TOTAL CUSTOMERS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM customers")->num_rows; ?></span>
              </div>             
            </div>            
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #211a7a, #434256); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">TOTAL PRODUCT TYPES</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM departments")->num_rows; ?></span>
              </div>             
            </div>            
          </div>           
        </div>        
<?php else: ?>
	<div class="col-12">
          <div class="card">
            <div class="card-body">
              Welcome <?php echo $_SESSION['login_name'] ?>!
            </div>
          </div>
      </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              

              <div class="info-box-content" style="background-image: linear-gradient(to right, #00048b , #0084b7); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">TOTAL TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;">
                  <?php echo $conn->query("SELECT * FROM tickets")->num_rows; ?>
                </span>
              </div>             
            </div>           
          </div>         
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">           
              <div class="info-box-content" style="background-image: linear-gradient(to right,#FF6347 , #FFA500 ); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">PENDING TICKETS</span>
                 <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;">
                  <?php echo $conn->query("SELECT * FROM tickets where status=0")->num_rows; ?>
                </span>
              </div>           
            </div>           
          </div>        
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">              
              <div class="info-box-content" style="background-image: linear-gradient(to right, #370c7c , #a900ff); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">PROCESSING TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=1")->num_rows; ?></span>
              </div>
            </div>            
          </div>          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image: linear-gradient(to right, #376405 , #09dd4a); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">DONE TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=2")->num_rows; ?></span>
              </div>             
            </div>            
          </div>  
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">             
              <div class="info-box-content" style="background-image:linear-gradient(to right, #680000 , #ff0000); border-radius: 11px;">
                <span class="info-box-text" style="font-size:24px; text-align:center; color:#fff;">CLOSED TICKETS</span>
                <span class="info-box-number" style="font-size:24px; text-align:center; color:#fff;"><?php echo $conn->query("SELECT * FROM tickets where status=3")->num_rows; ?></span>
              </div>             
            </div>            
          </div>           
        </div>
<?php endif; ?>


<style>
  .info-box{
    height:180px;
  }
</style>

