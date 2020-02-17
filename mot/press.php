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

         if( !empty($_FILES['pic']['tmp_name']) )
	     {
 
          
		  
		  
		  
		  
		  define('GW_UPLOADPATH','image/');

          $des = mysqli_real_escape_string($dbc,trim($_POST['des']));
		
		  $d = date("Y/m/d H:i:s");
          $d = str_replace("/","",$d);
		  $d = str_replace(" ","",$d);
		  $d = str_replace(":","",$d);
		
		  $pic_type=$_FILES['pic']['type'];
			   if( $pic_type=='image/png' )
			     { $ext = '.png'; }
			   if( $pic_type=='image/gif' )
				 { $ext = '.gif'; }
			   if( $pic_type=='image/jpg' )
				 { $ext = '.jpg'; }
			   if( $pic_type=='image/jpeg' )
				 { $ext = '.jpg'; }	 	 	 	    
			   $pic = $d.'4'.$ext;
			   $target = GW_UPLOADPATH.$pic;
			   move_uploaded_file($_FILES['pic']['tmp_name'],$target);
			   
			   
			   list($width, $height) = getimagesize($target);
		       $dst = imagecreatetruecolor(1000, 750);
		       if( $pic_type=='image/png' )
			     { $src = imagecreatefrompng($target);  }
			   if( $pic_type=='image/jif' )
			     { $src = imagecreatefromgif($target);  }
			   if( $pic_type=='image/jpg' )
			     { $src = imagecreatefromjpeg($target);  }
			   if( $pic_type=='image/jpeg' )
			     { $src = imagecreatefromjpeg($target);  }	   
		       	imagecopyresampled($dst, $src, 0, 0, 0, 0,1000, 750, $width, $height);
		       imagejpeg($dst, $target, 75);
		       imagedestroy($dst);
			   
			   
			   
			   
			   $query = "INSERT INTO press123 (pic,des)".
               "value('$pic','$des')";
		 
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


      <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                              
                              <h3><a href="../update.php">Go back to  Update Page</a></h3><br><hr>
                              
                    
                              
                             <form action="press.php" enctype="multipart/form-data" method="post">
                             
                             <h3>Press release </h3> <br>
                              Pic: <input type="file" name="pic" > <br><br>
                              Description: <textarea name="des" rows="4" cols="103"></textarea>
	                         
                             
                             <br><br>
                             
                             <input type="submit" value="NEXT" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  
     
    
    
    
    
    
    
  </body>
</html>