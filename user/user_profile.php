			<!-- Header -->
<?php 
include('user_header.php');
include('../connection/config.php');
$email=$_SESSION['login_user'];
$sql="select * from login where EMAIL='$email'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

	$id=$row['ID'];

$sql2="select * from register where ID='$id'";
$result2=mysqli_query($con,$sql2);
while($row2=mysqli_fetch_array($result2)){

 ?>
<body class="bg-light">
		<section>
			<div class="container mt-3">			
				<div class="text-center fw-bold">					
					<span class="d-flex justify-content-end mt-5 ">
						<a href="user_logout.php" class="btn btn-primary">Log out</a>
					</span>
					<h3 class="fw-bold "> PROFILE</h3>
					<div class="text-center">
						<img src="https://unloc.online/wp-content/uploads/2020/04/283-2833820_user-icon-orange-png.png" alt="avatar"
						class="rounded-circle img-fluid" style="width: 150px;">
					</div>
      </div>
		   <div class="row my-3 justify-content-center">
		      <div class="col-lg-8  ">
		        <div class="card mb-4 shadow-lg
		        ">
		          <div class="card-body">
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Full Name</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0"><?php echo$row2['NAME']; ?></p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Email</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0"><?php echo$row['EMAIL']; ?></p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Number</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0"><?php echo$row2['NUMBER']; ?></p>
		              </div>
		            </div>
		            <hr>
		            
		            
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Address</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0"><?php echo$row2['ADDRESS']; ?></p>
		              </div>
		            </div>

		          </div>

		        </div>
		        <div class="d-flex justify-content-center mb-2 p-1 ">
		              <a href="profileupdate.php?id=<?php echo$id ?>" class="btn btn-outline-primary text-danger fw-bold m-2">Edit</button>
		            </div>
		       
		      </div>
		    </div>
		  </div>
		</section>



<?php }} ?>


     <!-- js bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
			<!-- Footer -->
<?php include ('user_footer.php') ?>