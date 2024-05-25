      <!-- Header -->
<?php include('user_header.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<!-- Wrapper container -->
	<div class="text-center mt-5"><h3>FeedBack Form</h3></div>
<div class="container p-4 border w-50 mt-4 rounded-3 bg-light">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" method="post" action="">

    <!-- Name input -->
    <div class="mb-3 px-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" id="name" type="text" placeholder="Name" />
    </div>

    <!-- Email address input -->
    <div class="mb-3 px-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
    </div>

    <!-- Message input -->
    <div class="mb-3 px-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
    </div>

    <!-- Form submit button -->
    <div class="d-grid px-3">
      <button class="btn btn-primary btn-lg mb-3" name="submit" value="submit" type="submit">Submit</button>
    </div>

  </form>

</div>

</body>
</html>
<?php 
if(isset($_POST['submit'])){
  include('../connection/config.php');
  extract($_POST);
  $email=$_SESSION['login_user'];
  $sql="select * from login where EMAIL='$email'"; 
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $id=$row['ID'];
  $sql2="insert into feedback(ID,FEEDBACK) values('$id','$message')";
  $result2=mysqli_query($con,$sql2);
  if($result2){echo"<script>alert('thanks for the feedback!...');</script>";}
}


?>


<?php include ('user_footer.php') ?>