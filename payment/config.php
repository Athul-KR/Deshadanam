<?php
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define('CLIENT_ID', 'ATzD8j0Ha254gCbEb--xAk8GUnRqMGzBe9EmkKN8w2-rxnpijik-hFuXx-M2Pq8CMis9ezs1N0l6AdQ7');
define('CLIENT_SECRET', 'EGItF1uVHFYLWMpXDTj6-qEPxcapW1rJ95ga8qnjzKKGd3m3kxmDlgqQmuz-R34aabD7PR64Qe7-PkuC');
 
define('PAYPAL_RETURN_URL', 'http://localhost/deshadanam/payment/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/deshadanam/payment/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'tms'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live

?>