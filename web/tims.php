<?php

 $second1=strtotime($to1);
 echo "<br>";
 echo date('H:i:s',$second1);
 echo "<br>";
 $match=$second1-$first;
 echo date('H:i:s',$match);?>