<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once('connect_customer.php');
include_once('account_settings.php');
include_once('user_profile.php');
include_once('purchases.php');
include_once('invoices.php');
include_once('search.php');
include_once('pagination.php');
include_once('basket.php');

function customer($email) {
	//sidebar changes
	/*$dbname = "customers";
	$connect_customer($dbname);
	$account_settings = mysqli_query($connect, "select * from account_settings where userID = $email", MYSQLI_USE_RESULT);
	$user_profile = mysqli_query($connect_customer, "select * from user_profile where userID = $email", MYSQLI_USE_RESULT);
	$user_purchases = mysqli_query($connect_customer, "select * from user_purchases where userID = $email", MYSQLI_USE_RESULT);
	$user_invoices = mysqli_query($connect_customer, "select * from user_invoices where userID = $email", MYSQLI_USE_RESULT); */
	//TODO: Search field and querying , pagination, Images, A real business idea.
}
?>
