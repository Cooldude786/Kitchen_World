<?php 
 include('conn.php');
?>
	 
								
												 
				<?php
				if(!$_POST['khoj_data']=='')
				{
			$searchText=$_POST['khoj_data'];
			$str_query = "SELECT * FROM `product` WHERE `p_name` LIKE '%".$searchText."%'  ";
			$getResult=mysqli_query($conn,$str_query);
$Out='';
			if(mysqli_num_rows($getResult) > 0){

				while($row=mysqli_fetch_assoc($getResult)){
					$sname=$row['s_name'];
					 $subway=mysqli_query($conn,"SELECT * FROM `sub_category` WHERE `s_id`='$sname'");
					 $sub_fetch=mysqli_fetch_assoc($subway);
                     $Out.='<a href="single.php?pid='.$row['p_id'].'"><ul class="search_button" >';
				                    
                                $Out.='<li style="border-right:none;"><a href="single.php?pid='.$row['p_id'].'"><img src="../Kitchen World/upload/'.$row["image"].'"style="width: 70px;height:60px"></a></li>';
								$Out.="<li style='border-right:none;'><a href='single.php?pid=".$row['p_id']."'>".substr($row["p_name"],0,20)."</a><br><span>=></span><a href='product.php?subid=".$sub_fetch['s_id']."'>".$sub_fetch["s_name"]."</a></li><br>";
								 
								
								 
								 
                      $Out.="</ul></a>";
                       }echo $Out; }
                       else
                       {
                       	echo "Data not found";
                       }
                        
					  }else{

					  }  
					    ?> 
				 
		 