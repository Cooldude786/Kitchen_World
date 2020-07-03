<?php 
include('conn.php');
session_start();
 unset($_SESSION['email']);
// mysqli_query($conn,"UPDATE `visitore` SET  `visitore_store`=`visitore_store`0");
echo '<script type="text/javascript">window.location=\'index.php\'</script>';
?>