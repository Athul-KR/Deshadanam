<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HOME PAGE</title>
    <!-- CSS CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- external css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Font Family -->
    <link
      href="http://fonts.googleapis.com/css?family=Oswald:400,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar  -->
    <div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <h1 class="text-white ms-5">Dheshadanam</h1>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="header" id="navbarNav">
          <div class="navbar-nav fs-5">
            <li class="nav-item mx-1">
              <a class="nav-link active text-white" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <!-- About Button -->
            <li class="nav-item mx-1">
              <a class="nav-link text-white" href="about.php">About</a>
            </li>
            <!-- Package Button -->
            <li class="nav-item mx-1">
              <a class="nav-link text-white" href="packages.php">Tour Packages</a>
            </li>
            <!-- Contact Button -->
            <li class="nav-item mx-1">
              <a class="nav-link text-white" href="contact.php">Contact Us</a>
            </li>
            <!-- Enquiry Button -->
            <li class="nav-item ms-1 me-5">
              <a class="nav-link text-white" href="enquiry.php">Enquiry</a>
            </li>
            <!-- Sign Up Button -->
            <li class="nav-item mx-1">
              <button
                type="button"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                sign Up
              </button>
            </li>
                      <!-- Button trigger Registration form -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- <div class=""> -->
                    <span class="d-flex justify-content-end">
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </span>
                    <div class="modal-body">
                                  <!--Registration Form -->
                      <div class="container-fluid">
                        <h3 class="text-center">Create Your Account</h3>
                        <form method="post" action="">
                          <div class="form-outline ">
                            <label class="form-label" for="form3Example1cg"
                              >Your FullName</label
                            >
                            <input
                              type="text"
                              id="form3Example1cg"
                              class="form-control form-control-lg"
                              name="name"
                              pattern="[A-Za-z]{3,50}"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example3cg"
                              >Your Email</label
                            >
                            <input
                              type="email"
                              name="email"
                              id="form3Example3cg"
                              class="form-control form-control-lg"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example3cg"
                              >Your Number</label
                            >
                            <input
                              type="text"
                              name="number"
                              id="form3Example3cg"
                              class="form-control form-control-lg"
                              pattern="[0-9]{10}"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example4cg"
                              >Password</label
                            >
                            <input
                              type="password"
                              name="password"
                              id="form3Example4cg"
                              class="form-control form-control-lg"
                              pattern="[A-Za-z]{5-15}"
                              required
                            />
                          </div>

                          <div class="form-outline mb-1">
                            <label class="form-label" for="form3Example4cdg"
                              >Your Address</label
                            >
                            <textarea
                              id="form3Example4cdg"
                              name="address"
                              class="form-control form-control-lg"
                              required
                            ></textarea>
                          </div>
                          <div class="d-flex justify-content-center">
                            <input type="submit" name="submit" value="register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->
              </div>
            </div>
            <!-- LOGIN BUtton -->
            <li class="nav-item ms-1 me-5">
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#loginModal"
              >
                Login
              </button>
            </li>
                     <!-- Button trigger Login form -->
            <div
            class="modal fade"
            id="loginModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                           <form method="post" action="">
                          <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typeEmailX">Email</label>
                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                          </div>
            
                          <div class="form-outline form-white mb-4">
                            <label class="form-label" for="typePasswordX">Password</label>
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                          </div>
            
                          <p class="small mb-3 pb-lg-2"><a class="text-dark-50" href="./forget.php">Forgot password?</a></p>
                          <div class="d-flex justify-content-center">
                            <input type="submit" name="login" value="login" class="btn btn-primary btn-lg px-5">
                          </div> </form> 
            
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
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <?php
include('connection/config.php');
if(isset($_POST['submit'])){
  extract($_POST);
  $password=md5($password);
$sql="select * from login where EMAIL='$email' and PASSWORD='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==0){
  $sql="insert into login(EMAIL,PASSWORD,STATUS) values('$email','$password','1')";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  $sql2="select * from login where EMAIL='$email' and PASSWORD='$password'";
  $result2=mysqli_query($con,$sql2)or die(mysqli_error($con));
  $row=mysqli_fetch_array($result2);
  $id=$row['ID'];
  $sql3="insert into register values('$id','$name','$number','$address')";
  $result3=mysqli_query($con,$sql3)or die(mysqli_error($con));
  if($result){
    if($result3){
     echo"<script>alert('success');</script>";
    }
    else{echo"<script>alert('result3 error');</script>";}
  }else{echo"<script>alert('result error');</script>";}
}else{echo"<script>alert('user already exist');</script>";}
}
if(isset($_POST['login'])){
  extract($_POST);
  $password=md5($password);
  $sql="select * from login where EMAIL='$email' and PASSWORD ='$password'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count>0){
    $row=mysqli_fetch_array($result);
    if($row['STATUS']=='0'){
      $_SESSION['login_user']=$email;
     echo"<script>window.location='admin/index.php';</script>";
    }else{
    $_SESSION['login_user']=$email;
     echo"<script>window.location='user/user_index.php';</script>";
      }}
      else{echo"<script>alert('invalid username or password');</script>";
}
}
?>
