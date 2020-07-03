<?php
include('conn.php');?>
<script src="js/jquery-2.1.4.min.js"></script>
<select value='select option' onclick="cges()" id='onmen'>
<?php
$my=mysqli_query($conn,"SELECT * FROM category");
while($row=mysqli_fetch_assoc($my))
{
	$cat=$row['c_name'];
	$c_id=$row['c_id'];
?>

	<option value="<?php echo $c_id;?>" ><?php echo $cat;?></option>
	 
<?php } ?>
</select>

<script type="text/javascript">
	 function cges()
       {
            var category=document.getElementById('onmen').value;
            var data='category='+category;
            console.log(data);
            $.ajax({
                  type:'post',
                  url:'select_php.php',
                  data:data,
                  success:function(response)
                  {
                        $('#out').html(response);
                        console.log('res',response);
                  }
            });
       }
</script>
<select  id="out">
	  
</select>
 
		