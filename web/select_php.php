<?php
include('conn.php');
if($one=$_POST['category'])
{   
	if($win=mysqli_query($conn,"SELECT * FROM `sub_category` WHERE `c_name`='$one'"))
	{
	while($r=mysqli_fetch_assoc($win))
	{
	   $sub=$r['s_name']; 
           $s_id=$r['s_id'];
		 
		echo "<option value='$s_id'>$sub</option>";
	 }
	}else{
		echo 'error';
	}	 
	
}
 
else
{
	echo "not Work";
}
?>