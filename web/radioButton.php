<!DOCTYPE html>
<html>
<head>
	<title>select box</title>
	<script type="text/javascript">
		function send()
		{
			var name=new XMLHttpRequest();
			var select=document.getElementsByName('product');

	 
	
			name.open('GET','radio.php?read='+select,true);
			name.onreadystatechange=function()
  	{
	 	 if (name.readyState==4 && name.status==200)
		{
			document.getElementById("info").innerHTML=name.responseText;
		}
 	}
	name.send();
		}
	</script>
</head>
<body>
<input type="checkbox" name="product" value="names" onclick="send()">name
<input type="checkbox" name="product" onclick="send()">kumar<br>
<div id='info'></div>
</body>
</html>