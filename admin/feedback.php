<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<body>

<?php 
include('../connection/config.php');
$sql="select * from feedback";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

  $id=$row['ID'];
  $sql2="select * from register where ID='$id'";
  $result2=mysqli_query($con,$sql2);
  while($row2=mysqli_fetch_array($result2)){

    $sql3="select * from login where ID='$id'";
  $result3=mysqli_query($con,$sql3);
  while($row3=mysqli_fetch_array($result3)){

?>
		<!-- Package Card Start -->
<section class="p-5">
       <div class="card mb-3 w-50 bg-light" >
  <div class="row   ">
    <div class="col-md-2 justify-content-center">
    	
      <img src="https://unloc.online/wp-content/uploads/2020/04/283-2833820_user-icon-orange-png.png" alt="avatar"
              class="rounded-circle img-fluid mt-3" style="width: 150px;">

    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div><label><h5>Name:</h5></label><?php echo $row2['NAME']; ?></div>
       <div><label><h5>Email:</h5></label><?php echo $row3['EMAIL']; ?></div>
       <div><label><h5>Message:</h5></label> <?php echo $row['FEEDBACK']; ?></div>
        <form method="post" action="">
          <input type="hidden" name="fid" value="<?php echo $row['FID']; ?>">
        <input type="submit" name="delete" value="delete" onclick="call()" class="btn btn-primary">
      </form>
           </div>
         </div>
       </div>
     </div>
   </section>
   <?php }}} ?>
       <!-- js bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript">
  function call(){
    let x=confirm('are you sure!..');
    if(!x){event.preventDefault();}
  }
</script>

</body>
</html>
<?php 
if(isset($_POST['delete'])){
  extract($_POST);
  include('../connection/config.php');
  $sql="delete from feedback where FID='$fid'";
  $result=mysqli_query($con,$sql);
  if($result){echo"<script>window.location='index.php?id=6';</script>";}
}

?>