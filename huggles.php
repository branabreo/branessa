<html>
	<head>
		<title>Huggles</title>
		<link rel="stylesheet" type="text/css" href="huggles.css">
	</head>
	<body>
		Huggles sent :)
	</body>
</html>

<?php
$couponcode = htmlentities($_POST['couponcode']);
//echo $couponcode;
$val1=strcmp($couponcode, "HUGGLESPLZ");
//echo $val1;
if(!$val1)
{
    $to = "branabreo@gmail.com,vanes929@gmail.com"; // this is your Email address
    $from = "huggles@branessa.skinhairyou.com"; // this is the sender's Email address
    $subject = "Huggles";
    $message = "*Huggles* I'm always here for you honey :3";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
?>

