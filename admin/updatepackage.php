<div class="container">
<div class="row">
<?php 
include('../connection/config.php');
$sql="select * from package ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){


?>
<div class="col-3 m-2">
<div class="card" style="width: 18rem; height :600px">
  <img src="<?php echo 'img/'. $row['IMAGE'];?>" class="card-img-top" alt="..." height="300px">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['TITLE']; ?></h5>
    <p class="card-text"><?php echo $row['LOCATION']; ?></p>
    <p class="card-text"><?php echo $row['FEATURES']; ?></p>
    <p class="card-text"><?php echo $row['DETAILS']; ?></p>
    <div class="">
    	<form method='post' action=''>
        <a href="index.php?id=8&cid=<?php echo $row['ID']; ?>" class="btn btn-primary">Update</a>
    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
     <input type="submit" name="delete" value="delete" onclick='call()' class="btn btn-warning ">
 </form>

	</div>
  </div>
</div>
</div>
<?php }?>
</div>
</div>
<script type="text/javascript">
	function call(){
		let x=confirm('are you sure!..');
		if(!x){event.preventDefault();}
	}
</script>
<?php 
include('../connection/config.php');
if(isset($_POST['delete'])){
extract($_POST);
$sql="delete from package where ID='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo"<script>window.location='index.php?id=2'</script>";
}
}
?>