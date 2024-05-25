<div class="container">
	<h2>About Section</h2>
<form method="post" action="">
 <div class="form-outline ">
 <label class="form-label" for="form3Example1cg">Title</label>
<input
  type="text"
  id="form3Example1cg"
  class="form-control form-control-lg"
  name="title"
/>
<label class="form-label" for="form3Example1cg">Description</label>
<textarea
  type="text"
  id="form3Example1cg"
  class="form-control form-control-lg"
  name="description"
  rows='10'
></textarea>
<input type="submit" name="aupdate" value="Update" class="btn btn-primary">
</div>
</form>
</div>

<!-- contact section -->

<div class="container">
	<h2>Contact Section</h2>
<form method="post" action="">
 <div class="form-outline ">
 <label class="form-label" for="form3Example1cg">Address</label>
<input
  type="text"
  id="form3Example1cg"
  class="form-control form-control-lg"
  name="address"
/>
 <label class="form-label" for="form3Example1cg">Number</label>
<input
  type="number"
  id="form3Example1cg"
  class="form-control form-control-lg"
  name="number"
/>
 <label class="form-label" for="form3Example1cg">Email</label>
<input
  type="email"
  id="form3Example1cg"
  class="form-control form-control-lg"
  name="email"
/>
<input type="submit" name="cupdate" value="Address1" class="btn btn-primary">
<input type="submit" name="cupdate" value="Address2" class="btn btn-primary">
<input type="submit" name="cupdate" value="Address3" class="btn btn-primary">


</div>
</form>
</div>
<?php 
include('../connection/config.php');
if(isset($_POST['aupdate'])=='Update')
{
  extract($_POST);
  $sql="update about set TITLE='$title' , DESCRIPTION='$description'";
  $result=mysqli_query($con,$sql);
  if($sql){
    echo"<script>alert('updated!..');</script>";
  }
}
if(isset($_POST['cupdate']))
{
  if($_POST['cupdate']=='Address1'){
  extract($_POST);
$sql="update contact set ADDRESS='$address', NUMBER='$number', EMAIL='$email' where ID='1'";
  $result=mysqli_query($con,$sql);
  if($sql){
    echo"<script>alert('updated!..');</script>";
  }
}}
if(isset($_POST['cupdate'])=='Address2')
{
  if($_POST['cupdate']=='Address2'){
  extract($_POST);
$sql="update contact set ADDRESS='$address', NUMBER='$number', EMAIL='$email' where ID='2'";
  $result=mysqli_query($con,$sql);
  if($sql){
    echo"<script>alert('updated!..');</script>";
  }
}}
if(isset($_POST['cupdate'])=='Address3')
{
  if($_POST['cupdate']=='Address3'){
  extract($_POST);
$sql="update contact set ADDRESS='$address', NUMBER='$number', EMAIL='$email' where ID='3'";
  $result=mysqli_query($con,$sql);
  if($sql){
    echo"<script>alert('updated!..');</script>";
  }
}}

?>