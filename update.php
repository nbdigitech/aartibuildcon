<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>

<?php

      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  



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
                    
                              
                             
                             <a href="mot/editproject2.php"><p>EDIT PROJECT</p></a>
                             <hr>
                             <a href="mot/press.php"><p>INSERT NEW PRESS RELEASE</p></a>
                             <a href="mot/pressdelete.php"><p>DELETE PRESS RELEASE</p></a>
                             <hr>
                             <a href="mot/youtube.php"><p>INSERT NEW VIDEO GALLERY</p></a>
                             <a href="mot/youtubedelete.php"><p>DELETE VIDEO GALLERY</p></a>
                             <hr>
                             <a href="mot/news.php"><p>INSERT NEW NEWS</p></a>
                             <a href="mot/newsdelete.php"><p>DELETE NEWS</p></a>
                             <hr>
                             <a href="mot/worksee.php"><p>SEE/ DELETE WORK WITH US</p></a>
                             <hr>
                             <a href="mot/contactsee.php"><p>SEE/ DELETE CONTACT MESSAGE</p></a>
                             <hr>
                             <a href="mot/about.php"><p>EDIT ABOUT US</p></a>
                             <a href="mot/vision.php"><p>EDIT VISION</p></a>
                             <a href="mot/chairman.php"><p>EDIT CHAIRMAN</p></a>
                             <a href="mot/director.php"><p>EDIT DIRECTOR</p></a>
                             <a href="mot/social.php"><p>EDIT SOCIAL</p></a>
                             <a href="mot/green.php"><p>EDIT AARTI GREEN</p></a>
                             <hr>
                             <a href="logout.php"><p>LOGOUT</p></a>
                             <hr>
                             
                             
                             
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="mot/js/jquery-2.1.1.min.js"></script>
    <script src="mot/js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>