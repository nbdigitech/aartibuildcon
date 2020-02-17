<?php

session_start();

if(isset($_SESSION['user'])) {
header('location: update.php');
exit();
}

?>

<?php

      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AARTI | Sign In</title>
<link rel="shortcut icon" href="twxdroid.ico" />

    
    
    <style type="text/css">

     body { margin: 0; padding: 0; width: 1349px; margin-left: auto; margin-right: auto; }
	 
	 
	 
	      @font-face { font-family: quicksand; src: url(quicksand/Quicksand-Light.otf); }
		  
		  
		  @font-face { font-family: bebas; src: url(BebasNeuewebfont/BebasNeuewebfont.ttf); }
		  
		  @font-face { font-family: opensans; src: url(open-sans/OpenSans-Semibold.ttf); }
		  
		  
		  @font-face { font-family: opensans2; src:url(open-sans/OpenSans-Light.ttf); }
		  
		  @font-face { font-family: opensans3; src: url(open-sans/OpenSans-Regular.ttf); }
		  
		  @font-face { font-family: opensans4; src: url(open-sans/OpenSans-Bold.ttf); }
		  
		  
		  
		  .hover1 { background-color: #339999; }
		  
		  
		   a.link6:link { color:#333; text-decoration: none; }
		  
		  
		  a.link6:visited { color:#333; text-decoration: none; }
		  
		  a.link6:active { color:#333; text-decoration: none; }
		  
		  
		  a.link6:hover { color: #777; }
		  


     </style>
    
    
    


</head>

<body>



<?php


      $t = 0;  

       if( !isset($_SESSION['user']) && isset($_POST['Submit3']) )
	   { 
			$user = $_POST['user'];
			$password = $_POST['password'];  
			
			
			if( !empty($user) && !empty($password) )
			  {
			      
							   
							       
								   
								   
								   $email = mysqli_real_escape_string($dbc,trim($_POST['email']));
								   $password = mysqli_real_escape_string($dbc,trim($_POST['password']));
										 
								   $query = "SELECT * FROM email123 WHERE user = '$user' AND password = '$password' ";
										 
								   $result = mysqli_query($dbc,$query);
										 
								   if(mysqli_num_rows($result) == 1)
								     {
									   
									   $row = mysqli_fetch_array($result);
									   
									   $_SESSION['user'] = $row[1];  echo 'success';
									   
                                       header('location: update.php');
    			                       exit();
								   
								      }
									  
								    
					 }
					 
				 
		 
	   }

	  		 	 			  
								   
		

?>





       <div id="d1" style="height:auto; width: 1349px; margin-left: auto; margin-right: auto;">
     
         
                  
         
         
         
         
         <div id="d33" style="width: 1349px; height: 600px; float:left; margin-top: 3px;">
         
         
             
             
             
             <div id="x3" style="width: 500px; height: 608px; margin-right: 74px; float: left;">
       
                      <div id="x4" style="width: 426px; height: 400px; margin-top: 60px; float: right;">
       
                      <div id="x5" style="width: 426px; height: 50px; float: left;"><font style=" font-family: quicksand; font-size: 32px;">
                      Sign In</font></div>
                      
                      
                      
                      
       
     
                      <form id="login" action="login.php" method="post" enctype="multipart/form-data" name="signinform">
       
       
                      <input style="width: 376px; float: left; margin-top: 20px; border: 2px #777 solid;
                      background-repeat:no-repeat; background-position: 1.2%; padding: 8px 15px 8px 30px;" placeholder="user" 
                      name="user" type="text"/> 
                      <input style="width: 376px; float: left; margin-top: 20px; border: 2px #777 solid; background-position: 1.2%;
                       padding: 8px 15px 8px 30px;" placeholder="Password" name="password"
                      type="password"/>      
       
                      
       
                      <div id="x23" style="width: 422px; height: 30px; float: left; margin-top: 20px;"><input type="submit" name="Submit3"
                      value="Sign In" style="min-width: 90px; outline:none; padding: 8px 8px; text-align: center; background-color: #2672EC;
                      border-color: #2672EC; font-family: Arial, Helvetica, sans-serif; font-stretch: extra-expanded; font-size: 12px; border:1px
                      solid; color: white; cursor: pointer; display: inline-block; position: relative; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
                      "/></div>
                      
                      </form>
                   
                   
                       
       
                   </div>
      
            </div>
         
         
         </div>
       
       
       
       
       
       
       </div>
       
       

</body>
</html>
