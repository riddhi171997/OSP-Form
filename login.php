<html>
<body>
<?php 
if($_POST[password]=="12345" && ($_POST[regno]=="15BIT0258" || $_POST[regno]=="15bit0258"))
{
	header("location:successful.php");
	$name=$_POST[name];
	$regno=$_POST[regno];	
}
else
{
header("location:unseccessful.php");
}
?>
