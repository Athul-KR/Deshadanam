<header>
<?php
include "user_header.php";
?>
</header>
    <!-- Corousel Begins -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >           
    <div class="carousel-inner" >
        <div class="carousel-item active" data-bs-interval="2000">
        <img src="img/ladak7.jpg" class="d-block w-100" alt="..." height="450px">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="img/ladak8.jpg" class="d-block w-100" alt="..." height="450px">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
        <img src="img/ladak9.jpg" class="d-block w-100" alt="..."  height="450px">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
        <img src="img/ladak10.jpg" class="d-block w-100" alt="..."  height="450px">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</section>
		<!-- Package Card Start -->
        <section class="p-5">

          <?php 
        include('../connection/config.php');
        $sql="select * from package";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){


          ?>
       <div class="card mb-3 " >
  <div class="row g-0 ">
    <div class="col-md-1">
      <img src="../admin/img/<?php echo$row['IMAGE']; ?>" class="img-fluid rounded" alt="...">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo$row['TITLE']; ?></h5>
        <p class="card-text">Locations:<?php echo$row['LOCATION']; ?></p>
        <p class="card-text"><small class="text-muted">features:<?php echo$row['FEATURES']; ?></small></p>
       <p class="card-text"><small class="text-muted">Details:<?php echo$row['DETAILS']; ?></small></p>
      <p class="card-text"><small class="text-muted">amount:<?php echo$row['AMOUNT']; ?></small></p>


      </div>
    </div>
  </div>
  <div class="w-100">
    <form action="../payment/charge.php" method="post">
        <input type="hidden" name="id" value="<?php echo$row['ID'] ?>">
        <input type="hidden" name="email" value="<?php echo$_SESSION['login_user']?>">
        <input type="hidden" name="amount" value="<?php echo$row['AMOUNT']; ?>">
        <input type="submit" name="submit" value="Book now" class="btn btn-primary mt-2 container-fluid">
    </form>
</div>
</div>
<?php }?>
            <!-- Second Card -->
       
    
        
      
</section>		
			<!-- Stats BEgins	 -->
<section>
        <div class="container-fluid mb-5">
			<div class="row">
				<div class="col-4">
                    <div class="d-flex justify-content-center">
					    <h3 class="">10,000+</h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4>Enquires</h4>
                    </div>
				</div>
				<div class="col-4">
                    <div class="d-flex justify-content-center">
                        <h3 class="">2,000+</h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4>Registered Users</h4>
                    </div>
				</div>
				<div class="col-4">
                    <div class="d-flex justify-content-center">
                        <h3 class="">2,20,000+</h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4>Bookings</h4>
                    </div>
				</div>
			</div>
		</div>
</section>	
				<!-- Foooter Begins		 -->
<section>
<?php
include "../includes/footer.php";
?>
</section>



