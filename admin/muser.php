<table class='table'>
	<thead>
		<tr>
			<th>Name</th>
			<th>Number</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
<?php
$con=mysqli_connect("localhost","root","","tms");
if(!$con){echo"<script>alert('db error');</script>";}
$sql="select * from register";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){

echo"
        <tr>
			<td> ".$row['NAME']."</td>
			<td>".$row['NUMBER']."</td>
			<td>".$row['ADDRESS']."</td>
<td>
<form method='post' action=''>
<input type='hidden' name='id' value='".$row['ID']."'>
<input type='submit' class='btn btn-primary' name='delete' onclick='call()' value='Remove User'></form>
</td>
</tr>
	";}} ?>
	</tbody>
</table>
<?php
if(isset($_POST['delete'])){
	extract($_POST);
	$sql="delete from login where ID='$id'";
	$sql2="delete from register where ID='$id'";
	mysqli_query($con,$sql);
	mysqli_query($con,$sql2);
echo"<script>window.location='index.php?id=3'</script>";
echo"<script>alert('User Removed!..')</script>";

}

?>
<script type="text/javascript">
	function call(){
		let x=confirm('are you sure!..');
		if(!x){event.preventDefault();}
	}
</script>


