<?php

// set no. of items
if (!isset ($_GET["no"]))
{
$itemno = 7000;
}
else if ($_GET["no"] > 9999)
{
echo("Nicht übertreiben!");
$itemno = 2222;
}
else if ($_GET["no"] < 111)
{
echo("Nicht untertreiben!");
$itemno = 2222;
}

else
{
$itemno = $_GET["no"];
}
$theno = 1;
$theindex = 1;


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>localghost</title>
<style type="text/css">
<!--
body, A {
	font-family: "Courier New", Courier, monospace;
	font-size: 12px;
	font-weight: bold;
	color: #999;
	background-color:#000;
	text-decoration:none;
}	

A:hover {color: #FA8F26;}

.laylo {
	position: absolute;
	z-index:1;
}


-->
</style>
</head>

<body>
<!-- <a href="https://mymediaconsult.at/"><img src="http://mymediaconsult.at/wp-content/uploads/2015/12/MClogo.png" width="150" style="padding-right:15px; padding-bottom:10px; border: 0; float: left;" alt="EOF Media Consult"/></a>
-->
hello, this is localghost. Pattern created by Oliver Falk.
<?php 

//passive elemente

do {

$theleft2 = abs(ceil(rand(1,400)));
$thetop2  = abs(ceil(220+rand(1,40)));
echo $theleft2." ";
// echo ("<img src=\"/3x3.gif\" class=\"laylo\" style=\"left: ".$theleft2."px; top: ".$thetop2."px;\">");

$theindex2 = $theindex2 +1;

} while ($theindex2 <= $itemno);

?>

</body>
</html>
