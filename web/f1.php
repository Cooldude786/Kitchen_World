<input type='text' id='na' >
<script type='text/javaScript'>
  function name()
  { var on=new XMLHttpRequest();
  	var a=document.getElementById().value;
     on.open('GET','pro_php.php?covid='+a,true);
     on.onreadystatechange=function()
     {
     	if(on.status==4 && on.ReadyState==200)
     	{
     		document.getElementById('pid').innerhtml=on.responsetext;
     	}
     }
     on.send();
  }
	</script>