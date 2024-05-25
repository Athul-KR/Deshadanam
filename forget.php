<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form method="post" action="" return onsubmit="call();">
<section class="">
<div class="container text-center">
  <div>
  <h1>Forget <span class="text-success">Password?</span></h1>
  <p>You can reset your password<span class="fw-bold"> using this form</span></p>
</div>
<div class="bg-light w-50 offset-3 rounded-2 shadow p-3 mt-2">
<table>
  <tr>
    <td><label class="fw-bold">Email Id</label></td>
<td><input type="email" name="email" class="ms-4 mb-3 mt-4 form-control" id="" required></td>
  </tr>
  <tr>
    <td><label class="fw-bold">Number</label></td>
<td><input type="password" name="number" class="ms-4 mb-3 mt-4 form-control" id="" required></td>
  </tr>
  <tr>
<td><label class="fw-bold">New Password</label></td>
<td><input type="password" name="Pass" id="pass" class="ms-4 mb-3 mt-4 form-control" id="" required></td>
</tr>
<tr>
<td><label class="fw-bold">Confirm Password</label></td>
<td><input type="password" name="cpass" id="cpass" class="ms-4 mb-3 form-control" required></td>
</tr>
</div>

</div>

</div>
</table>
<button class="submit btn btn-success" type="submit" name="update" value="update">Submit</button>
</section>
</form>
<a href="index.php" class="btn btn-secondary">Back</a>
<script>
  function call(){
    let pass=document.getElementById('pass').value;
    let cpass=document.getElementById('cpass').value;
    if(pass!=cpass){alert('password and confirm password mismatch')}
      return false;

  }
  </script>
</body>
</html>
<?php
if(isset($_POST['update'])){
  include("connection/config.php");
  extract($_POST);
  $sql="select * from login where email='$email'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count>0){
       $row=mysqli_fetch_array($result);
       $id=$row['ID'];
       $sql2="select * from register where NUMBER='$number'";
       $result2=mysqli_query($con,$sql2);
       $count2=mysqli_num_rows($result2);
       if($count2>0){
        $cpass=md5($cpass);
        $sql3="update login set PASSWORD='$cpass' where ID='$id'";
        $result3=mysqli_query($con,$sql3);
        if($result3){echo"<script>alert('password resetted')</script>";}

       }else{echo"<script>alert('incorrect number');</script>";}

  }else{echo"<script>alert('incorrect email');</script>";}

}

?>