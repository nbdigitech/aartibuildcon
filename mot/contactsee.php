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

								   
								   
								   if( isset($_GET['id']) )
								    {
									
									   $id= $_GET['id'];
									
									   $query = " DELETE FROM contact123 WHERE id= '$id' ";
								       $result = mysqli_query($dbc,$query);
									   
									   echo 'updated successfully -->';
								   
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

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                    
                    
                             <h3><a href="../update.php">Go back to  Update Page</a></h3><br><hr>
                    
                              
                             
                             <?php
							 
							     
							      
								   
								   
								   
								   $query = " SELECT * FROM contact123 ORDER BY id DESC ";
								   $result = mysqli_query($dbc,$query);
								   
								   $i=1;
								   
								   while( $a = mysqli_fetch_array($result) )
								   {
								   
							?>
                            
                                      <span><?php echo $i; ?>.<br>
									  </span> <span>Name :<?php echo $a[1]; ?></span> <br>
                                      <span>Subject: <?php echo $a[2]; ?></span> <br>
                                      <span>Phone: <?php echo $a[3]; ?></span> <br>
                                      <span>City: <?php echo $a[4]; ?></span> <br>
                                      <span>Email: <?php echo $a[5]; ?></span> <br>
                                      <span>Message: <?php echo $a[6]; ?></span> <br>
									  <span>Date: <?php echo $a[7]; ?></span> <br>
									  <span>Sender: <?php echo $a[8]; ?></span> <br>
									 
                                      <span style="margin-top: 15px;"> </span> 
                                      <a href="contactsee.php?id=<?php echo $a[0]; ?>"><span style="margin-top: 15px;">DELETE</span></a>
                                      
                                      <br><br><br><hr>
                            <?php
							          $i++;
								   }          
                             ?>
                             
                             
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>