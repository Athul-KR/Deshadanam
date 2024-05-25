<?php 
include('../connection/config.php');
$sql="select * from enquiry";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
    <table class="table">
	<tr><td>Name:</td><td><?php echo $row['NAME']; ?></td></tr>
	<tr><td>Email:</td><td><?php echo $row['EMAIL']; ?></td></tr>
	<tr><td>Subject:</td><td><?php echo $row['SUBJECT']; ?></td></tr>
	<tr><td>Message:</td><td><?php echo $row['MESSAGE']; ?></td></tr>
	</table>
	<form method="post" action="">
		<input type="hidden" name="id" value="<?php echo $row['ID'];?>">
		<input type="submit" class="btn btn-primary" name="delete" onclick="call()" value="Delete">
	</form>
<?php } ?>
<?php
if(isset($_POST['delete'])){
	extract($_POST);
	$sql="delete from enquiry where ID='$id'";
	mysqli_query($con,$sql);
echo"<script>window.location='index.php?id=7'</script>";
}

?>
<script type="text/javascript">
	function call(){
		let x=confirm('are you sure!..');
		if(!x){event.preventDefault();}
	}
</script>
