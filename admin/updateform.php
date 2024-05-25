<?php 
$id=$_GET['cid'];

          
        include('../connection/config.php');
        $sql="select * from package where id='$id'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){


         

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section>
<div class="bg-light">
<div class="row">
<div class="col-6 offset-4">
<form method="POST" action="#" enctype="multipart/form-data">
<table>
<td><label class="fw-bold">Tittle</label></td>
<td><input type="text" name="tittle" class="ms-4 mb-3 mt-4 form-control" value="<?php echo $row['TITLE']; ?>" id="" required></td>
</tr>
<tr>
<td><label class="fw-bold">Package type</label></td>
<td><input type="text" name="type" id="" class="ms-4 mb-3 form-control"  value="<?php echo $row['TYPE']; ?>" required></td>
</tr>
<tr>
<td><label class="fw-bold">Amount</label></td>
<td><input type="text" name="amount" id="" class="ms-4 mb-3 form-control"  value="<?php echo $row['AMOUNT']; ?>" required></td>
</tr>
<tr>
<td><label class="fw-bold">Upload</label></td>
<td><input type="file" name="image" id="" class="ms-4 mb-3 form-control"  value="<?php echo $row['IMAGE']; ?>" required></td>
</tr>
<tr>
<td><label class="fw-bold">Location</label></td>
<td><input type="text" name="location" id="number" class="ms-4 mb-3 form-control"  value="<?php echo $row['LOCATION']; ?>" required></td>
</tr>
<tr>
<td><label class="fw-bold">Features </label></td>
<td><input type="text" name="features" id="" class="ms-4 mb-3 form-control"  value="<?php echo $row['FEATURES']; ?>" required></td>
</tr>
<tr>
<td><label class="fw-bold">Detalis</label></td>
<td><textarea class="ms-4 form-control mb-5"  value="<?php echo $row['DETAILS']; ?>" name="details"></textarea>
</table>
<div class="col-md-8 text-center">
<input type="submit" class="btn btn-primary mb-5" value="Update" name="submit"></div>
</form>
</div>
</div>
</div>
</section>

</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	extract($_FILES);
	$target_dir = "img/";
    $target_file = $target_dir.$_FILES["image"]["name"];
	$image= $_FILES['image']['tmp_name'];
	$img_name=$_FILES["image"]["name"];
	$type=$_POST['type'];
	$tittle=$_POST['tittle'];
	$amount=$_POST['amount'];
	$location=$_POST['location'];
	$features=$_POST['features'];
	$details=$_POST['details'];
    $sql="update package set TITLE='$tittle',TYPE='$type',AMOUNT='$amount',IMAGE='$img_name',LOCATION='$location',FEATURES='$features',DETAILS='$details' where ID='$id'";
	$res=mysqli_query($con,$sql);
	if($res)
	{   
		move_uploaded_file($image,$target_file);
		echo "<script>alert('package Updated')</script>";
	}
	else
	{
		mysql_error($res);
	}
}

?>