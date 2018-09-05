<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get Location From IP Address</title>
</head>

<body>
<?php
function countryCityFromIP($ipAddr)
{
	$url = "http://api.ipinfodb.com/v3/ip-city/?key=5cfaab6c5af420b7b0f88d289571b990763e37b66761b2f053246f9db07ca913&ip=$ipAddr&format=json";
	$d = file_get_contents($url);
	$ip= json_decode($d , true);
	
	$strCity = $ip['cityName'];
	$strCountry = $ip["countryCode"];
	$strState = $ip["regionName"];
	$strZipcode = $ip["zipCode"];
	$strLatitude = $ip["latitude"];
	$strLongitude = $ip["longitude"];
	echo $strCity."--".$strState."--".$strCountry."----".$strZipcode."---".$strLatitude."---".$strLongitude;
}
echo countryCityFromIP("66.249.75.78");
?>
</body>
</html>