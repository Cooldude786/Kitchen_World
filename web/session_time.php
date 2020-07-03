 <?php
 session_start();
 date_default_timezone_set('Asia/Kolkata');
 include('conn.php');
 $ts='';
 $my=mysqli_query($conn,"SELECT * FROM `e_time`");
while($ms=mysqli_fetch_assoc($my))
{
	$ts=$ms['time'];
}
  $_SESSION['time']=$ts;
  $_SESSION['start_time']=date("Y-m-d H:i:s");
  $end_time=$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION['time'].'minutes',strtotime($_SESSION['start_time'])));
  $_SESSION['end_time']=$end_time;
 
 ?>
 <script type="text/javascript">
 	setInterval(function(){
 		var vr=new XMLHttpRequest();
 		vr.open('GET','tims.php',false);
 		vr.send(null);
 		document.getElementById('response').innerHTML=vr.responseText;
 	},1000);
 </script>
 <div id='response'></div>