<?php 
if(isset($_GET['id'])){ 
extract($_GET);
if($id=='1'){include('addpackage.php');}//add packages
if($id=='2'){include('updatepackage.php');}//update packages
if($id=='3'){include('muser.php');}//manage users
if($id=='4'){include('managepage.php');}//manage pages
if($id=='5'){include('managebooking.php');}//manage booking
if($id=='6'){include('feedback.php');}//manage issues
if($id=='7'){include('menquiry.php');}//manage enquires
if($id=='8'){include('updateform.php');}//manage enquires
if($id=='9'){include('profileupdate.php');}//manage enquires


}
else{
	include('dummy.php');
}
?>