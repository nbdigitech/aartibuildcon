<?php

      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  



?>


<?php include 'header2.php'; ?>

		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


            <div class="parallax" id="page-header" style="background-image:url(content/backgrounds/1920x600-1.jpg); margin-top: 30px;">
				
				<div class="container" style="margin-bottom: 0px;">
					<div class="row">
						<div class="span12">

                            <h2>Contact</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
			
            
            
            


<?php


     $i=0;

     if(isset($_POST['submit'])){

if(!empty($_POST['nam']) && !empty($_POST['sub']) && !empty($_POST['ema']) && !empty($_POST['phone']) && !empty($_POST['city'])       && !empty($_POST['mes'])&& !empty($_POST['fromWhere']) )
	     {
 
          
		      
			  
			  $nam = mysqli_real_escape_string($dbc,trim($_POST['nam']));
			  $sub = mysqli_real_escape_string($dbc,trim($_POST['sub']));
			  $ema = mysqli_real_escape_string($dbc,trim($_POST['ema']));
			  $phone = mysqli_real_escape_string($dbc,trim($_POST['phone']));
			  $city = mysqli_real_escape_string($dbc,trim($_POST['city']));
			  $mes = mysqli_real_escape_string($dbc,trim($_POST['mes']));
			  $who = mysqli_real_escape_string($dbc,trim($_POST['fromWhere']));
			  $ref = '';
			  if(isset($_POST['ref'])){
			        $ref = mysqli_real_escape_string($dbc,trim($_POST['ref']));
              }
			  $dat = date("Y/m/d H:i:s");
              $query = "INSERT INTO contact123 (nam,sub,phone,city,ema,mes,dat,who,ref)".
               "value('$nam','$sub','$phone','$city','$ema','$mes','$dat','$who','$ref')";
			   
		      $result = mysqli_query($dbc,$query);
			  $i =2;
			
		  }
	      else $i =1;
	
	}	  	  	  



?>
            
            
            <div class="container">
            	<div class="row">
				<div class="span4">
                    	
                        <div class="widget ewf_widget_contact_info">
                            
                            <h5 class="widget-title">Contact Info</h5>
                            
                            <p>We are an organization that our client trusts for quality, reliability and integrity because we respect business ethics.</p>
                            
                             <ul>
                                <li>
                                    <i class="ifc-geo_fence"></i>
                                    Aarti House, Ashoka Ratna, Vidhan Sabha Road Shankar Nagar, Raipur (C.G.) 
                                </li>
                                <li>
                                    <i class="ifc-phone1"></i>
                                    +91 9770550550, +91 91110550550
                                </li>
<li>
                                    <i class="ifc-phone1"></i>
                                    <a href="">0771-4222701/702/703</a>
                                </li>
                                <li>
                                    <i class="ifc-message"></i>
                                    <a href="">sales@aartiinfrabuild.com</a>
                                </li>
                                <li>
                                    <i class="ifc-domain"></i>
                                    <a href="www.aartiinfrabuild.com">www.aartiinfrabuild.com</a>
                                </li>
                            </ul>
                            
                        </div><!-- end .ewf_widget_contact_info -->
                        
                        <div class="widget ewf_widget_social_media"> 
                        
                            <h5 class="widget-title">Social Media</h5>
                            
                            <div class="fixed">
                            
                                <a href="https://www.facebook.com/aartiinfrabuild/" class="facebook-icon social-icon">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                
                                <a href="#" class="twitter-icon social-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                
                                <a href="#" class="googleplus-icon social-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                
                                <a href="#" class="pinterest-icon social-icon">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                
                                <a href="#" class="dribble-icon social-icon">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                
                                <a href="#" class="youtube-icon social-icon">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                                
                            </div>
                            
                        </div><!-- end .ewf_widget_social_media -->
                        
                    </div><!-- end .span4 -->
 
                	<div class="span8">
                    	
                        <h5 class="text-uppercase" style="margin-bottom: 30px;">Get in touch</h5>
                        
                        <?php
						     if($i==1)
							 {
						?>
                             	<center><div style="width: 100%; height: 40px; background-color: #FF0000; margin-bottom: 15px;">
                                  <h5 class="text-uppercase" style="margin-bottom: 30px; color: #FFFFFF; padding-top: 10px;">Incomplete form please fill all fields and try again..</h5>
                                </div></center>
                        <?php
						     }
						     if($i==2)
							 {
						?>
                             	<center><div style="width: 100%; height: 40px; background-color: #009900; margin-bottom: 15px;">
                                  <h5 class="text-uppercase" style="margin-bottom: 30px; color: #FFFFFF; padding-top: 10px;">
                                  Thanks for contacting us we will contact you soon.</h5>
                                </div></center>        
                                
                        <?php
						     }
						?>	          
                        
                        <form name="contact" method="post" action="contact.php" enctype="multipart/form-data">  
                            <fieldset>
                                <div id="formstatus"></div>
                                <p>
                                    <input class="span12" type="text" id="name" name="nam" value="" placeholder="Name">
                                </p>
                                <p>
                                    <input class="span12" type="text" id="subject" name="sub" value="" placeholder="Subject">
                                </p>
                                <p>
                                   <input class="span12" type="text" id="email" name="ema" value="" placeholder="Email"> 
                                </p>
								<p>
                               <input class="span12" type="text" id="phone" name="phone" value="" placeholder="Mobile Number"> 
                                </p>
								<p>
                               <input class="span12" type="text" id="city" name="city" value="" placeholder="Your City Name"> 
                                </p>
								<input type="hidden" name="fromWhere" value="customer_Contact">
                                <p>
                                    <textarea class="span12" id="message" name="mes" rows="2" cols="25" placeholder="Message"></textarea>
                                </p>
                        <?php if(isset($_GET['ref'])){ ?>        
                                <p>
                                   <input class="span12" type="text" id="ref" name="ref" value="<?php if(isset($_GET['ref'])){ echo $_GET['ref']; }
								    ?>" placeholder="Refrence"> 
                                </p>
                        <?php } ?>        
                                <p class="last">
                                    <input class="btn" id="submit" type="submit" name="submit" value="Submit" >
                                </p>
                            </fieldset>
                        </form><!-- end #contact-form -->
                        
                    </div><!-- end .span8 -->
               </div><!-- end .row -->
            </div><!-- end .container -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    

</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 20:00:58 GMT -->
</html>