<?php include('includes/header.php');  ?>

<!-- contact us background image start-->
<section class="cover-image">
  <div class="container">
   <div class="heading"> <h4 class="over text-white">Welcome to ootty <span class="text-dark">Nice to Meet You</span></h4></div>
  </div>
  </section>
 <!-- contact us background image section end--> 
<section class="contact-body">
  <div class="container">
    <h1 class="over">Contact Us</h1>
    <div class="row text-center pt-4">
      <?php 
      include('connection/config.php');
      $sql="select * from contact";
      $result=mysqli_query($con,$sql);
      while($row=mysqli_fetch_array($result)){

      ?>
      <div class="col-4">
        <p class="over"><?php echo $row['ADDRESS'];?></p>
        <p class="over"><?php echo $row['NUMBER'];?></p>
        <p class="over"><?php echo $row['EMAIL'];?></p>
    </div>
    <?php }?>
    <!-- <div class="col-4">
        <p class="over">alakanandha</p>
        <p class="over">+91-8113963652</p>
        <p class="over">albukkark.vkm.gmail.com</p>
    </div>
    <div class="col-4">
        <p class="over">kinder joy</p>
        <p class="over">+91-9865321245</p>
        <p class="over">walkaroo2255@gmail.com</p>
    </div> -->
  </div>
</section>
<?php include('includes/footer.php');?>