<?php include('includes/header.php'); ?>

<!-- about us coverimg -->
<section class="about">
<div class="container-fluid">
	<div class="container p-5">
		<h1 class="display-2 pt-2 text-center text-white">Life is cool in the pool...</h1>
	</div>
</div>
</section>	

<!-- about us coverimg end -->
<?php 
include('connection/config.php');
$sql="select * from about";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
<!-- aboutus content start -->
<section class="aboutpara">
<div class="container pt-4">
	<h1 class="py-1 text-success">About Us</h1>
	<h4><!-- Welcome to Deshadanam!!!... --> <?php echo $row['TITLE']; ?></h4>
	<p class="text-center"><!-- Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients.This arduous effort has enabled Shreya Tour & Travels to be recognized as a dependable Travel Solutions provider with three offices Delhi. We have got packages to suit the discerning traveler's budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan. --><?php echo $row['DESCRIPTION']; }?></p>
</div>
</section>	
<!-- aboutus content end -->

<?php  include('includes/footer.php');?>