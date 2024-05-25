<?php include('user_header.php') ?>

<!-- 2nd section -->
<section class="cover-image">
  <div class="container-fill">
    <div class="bg-image">
     <div class="cont1 text-light text-center pt-5">
        <div class="covtxt mt-3  text-dark"><h1>Dheshadanam-Package Details</h1></div>
        </div>
            </div>
          </div>
</section>
<?php 
include '../connection/config.php';

$sql="SELECT * FROM `package`";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{


?>
<!-- 3rd section -->
<section class="m-5">
  <div class="container-fluid" style="border:1px solid #cecece;">
    <div class="row">
      <div class="col-3 m-2">
        <img src="../admin/img/<?php echo $row['IMAGE'] ?>" class="image-fluid" style="width:100%;height: 100%;">
      </div>
      <div class="col-7 ms-2">
        <h1><?php echo $row['TITLE']; ?></h1>
        <h3 class="text-end fs-2">Amount $ : <?php echo $row['AMOUNT']; ?></h3>        
        <p><span class="fs-5">Package Type: <?php echo $row['TYPE']; ?></span></p>
        <p><span class="fs-5">Package Location: <?php echo $row['LOCATION']; ?></span></p>
        <p><span class="fs-5"> Features: <?php echo $row['FEATURES']; ?></span></p>               
        <div>
          <h4>Package Details</h4>
          <p><?php echo $row['DETAILS']; ?></p>

        </div>
        <div class="">
        <form action="../payment/charge.php" method="post"> 
        <input type="hidden" name="amount" value="<?php echo$row['AMOUNT'] ?>">       
        <input type="hidden" name="id" value="<?php echo$row['ID'] ?>">
        <input type="hidden" name="email" value="<?php echo$_SESSION['login_user']?>">       
        <input type="submit" name="submit" value="Book Now" class="btn btn-primary mt-2 container-fluid">
        </form>   
        </div>
      </div>
    </div>
  </div>  
</section>
<?php } ?>

<!-- 4th sectiom -->
<!-- <section class="m-5">
  <div class="container-fluid" style="border:1px solid #cecece;">
    <div class="row">
      <div class="col-12 m-4">
        <h1>Travel</h1>
        <p>Comment</p>
        </div>
        <div class="row">
            <form>
            <div class="col-12 mb-2">
            <textarea class="border-top border-start border-end" cols="160"></textarea>
      </div>
      <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#loginModal"
              >
                Book Now
              </button>
    </div>
</div>
</section> -->
            <!-- Button trigger Login form -->
            <div
            class="modal fade"
            id="loginModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="">
                  <span class="d-flex justify-content-end">
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </span>
                  <div class="modal-body">
                                      <!-- Login Form -->
                        <div class="container">
                          <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                          <p class="text-dark-50 mb-3 text-center">Please enter your login and password!</p>
            
                          <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typeEmailX">Email</label>
                            <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                          </div>
            
                          <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typePasswordX">Password</label>
                            <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                          </div>
            
                          <p class="small mb-3 pb-lg-2"><a class="text-dark-50" href="#!">Forgot password?</a></p>
                          <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-lg px-5" type="submit">Login</button>
                          </div>  
            
                          <div class="d-flex justify-content-end text-right mt-2 pt-1">
                            <a href="#!" class="text-dark"><i class="fab fa-facebook-f fa-sm"></i></a>
                            <a href="#!" class="text-dark"><i class="fab fa-twitter fa-sm mx-2 px-2"></i></a>
                            <a href="#!" class="text-dark"><i class="fab fa-google fa-sm"></i></a>
                          </div>
            
                        </div>
                        </div>
                  </div>
                </div>
              </div>
          </div>    
</div>

<?php include ('user_footer.php') ?>