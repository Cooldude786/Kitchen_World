<!DOCTYPE html>
<html>
<head>
	<title>time </title>
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
  <div id="ids"></div>
  <input type="numebr" name="" id="no">  
</body>
</html>
<script type="text/javascript">
	var once = document.getElementById('no').value;
	$.ajax({ 
        type:'post',
        url:'tims.php',
        data:once,
        success:function(response)
        {
        	console.log(response);
        	$('#ids').html(response);
        }
	});
</script>
