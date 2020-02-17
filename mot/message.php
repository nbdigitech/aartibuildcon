<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>



<?php

      ini_set('max_execution_time', 3000);
	  
      include 'database.php';
	  



?>






   <?php
   
   
   
		$d = date("Y/m/d H:i:s");
        $d = str_replace("/","",$d);
		$d = str_replace(" ","",$d);
		$d = str_replace(":","",$d);
	 
	    echo $d;
		
		
	?>	