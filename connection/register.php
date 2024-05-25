<?php 
if(isset($_POST['login'])){
	extract()
  $sql="select * from login where EMAIL='$email' and PASSWORD ='$password'";
  $result=mysqli_query($con,$sql);
  if($result){
    $row=mysqli_fetch_array($result);
    if($row['STATUS']==0){
      $_SESSION['login_user']=$email;
      header('location=admin/admin_index.php');

    }else{
    $_SESSION['login_user']=$email;
       header('location=profile.php');
      }}
}
?>