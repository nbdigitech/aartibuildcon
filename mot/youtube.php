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


     if(isset($_POST['submit'])){
	 
         if( !empty($_POST['hea']) && !empty($_POST['you']) )
	     {
 
          
		  
		  
		  
		  
		  

          $hea = mysqli_real_escape_string($dbc,trim($_POST['hea']));
		
		  $youtube = mysqli_real_escape_string($dbc,trim($_POST['you']));
		 
		 //$ae = explode('" frameborder="0"', $youtube);
		 
		 //$re = explode('src="https://www.youtube.com/embed/',$ae[0]);
			   
			//echo $re[0];
			//echo " ".$re[1];  
			   
			   
			   $query = "INSERT INTO youtube123 (hea,you)".
               "value('$hea','$youtube')";
		 
		       $result = mysqli_query($dbc,$query);
			   	  	 

 
               echo 'updated successfully -->';
 
           }
           else echo 'incomplete form, please go back fill all details';

      }

?>












<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                              
                             <form action="youtube.php" enctype="multipart/form-data" method="post">
                             
                             <h3>Video </h3> <br>
                              Header: <input type="text" name="hea"> <br><br>
                              Youtube Link: <textarea name="you" rows="4" cols="103"></textarea>
	                         
                             
                             <br><br>
                             
                             <input type="submit" value="sumbit" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
  
  
     
    
    
    
    
    
    
  </body>
</html>