<?php
require_once 'config.php';
extract($_POST);
include("../connection/config.php");
$sql="insert into booking(P_ID,EMAIL) values ('$id','$email')";
$result=mysqli_query($con,$sql);

 $amount=$_POST['amount'];
if (isset($_POST['submit'])) {
 
    try {
        $response = $gateway->purchase(array(
            'amount' => $amount,
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
        ))->send();
 
        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}