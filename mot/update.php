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




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="mot/css/bootstrap.min.css" rel="stylesheet">

    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                              
                             
                             <br>
                             
                             
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="mot/js/jquery-2.1.1.min.js"></script>
    <script src="mot/js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>