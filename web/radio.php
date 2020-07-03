
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
$r=$_GET['read'];
if($r=="")
{
		echo "you have not selected any item";
}
else
{
		echo "you have selected". $r;
}
?>
</body>
</html>

