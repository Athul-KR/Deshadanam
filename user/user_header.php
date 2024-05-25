<?php 
session_start();
if(!isset( $_SESSION['login_user']))
{
  header('Location:../index.php');
}
?>
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
        <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
              <a class="nav-link active text-white " aria-current="page" href="user_index.php"
                >Home</a
              >
            </li>
            <!-- Package Button -->
            <li class="nav-item mx-1">
              <a class="nav-link text-white btn-outline-secondary" href="user_package.php">Tour Packages</a>
            </li>
            <!-- About Button -->
            <li class="nav-item mx-1">
              <a class="nav-link text-white btn-outline-secondary" href="User_feedback.php">Notification</a>
            </li>
            <!-- Contact Button -->
            <li class="nav-item mx-1 fs-5">
              <a class="nav-link text-white  btn-outline-secondary " href="user_profile.php">Profile</a>
            </li>
            <li>
              <p class="text-white p-2"><?php  echo $_SESSION['login_user']; ?></p>
            </li>
                        <!-- user icon dropdown and logout -->
            <li class="">  
              <div class="dropdown dropstart text-end p-2">
                <!-- <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown">                   -->
                  <i class="bi bi-person-circle text-light fs-2" data-bs-toggle="dropdown"></i> 
                <!-- </button> -->
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="user_logout.php">Log Out</a></li>                  
                </ul>
              </div>

            </li>

</div>        
</div>        
</div> 
</div>              