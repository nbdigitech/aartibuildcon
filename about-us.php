<?php

      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  



?>


        <?php include 'header2.php'; ?>

		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

				
				
				
			</div><!-- end #page-header -->
            
             <div class="parallax" id="page-header" style="background-image:url(content/backgrounds/1920x600-1.jpg); margin-top: 30px;">
				
				<div class="container" style="margin-bottom: 0px;">
					<div class="row">
						<div class="span12">

                            <h2>Our Team</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->



<?php


     
 
			  
              

              $query = " SELECT * FROM about123 LIMIT 1";
		 
		      $result = mysqli_query($dbc,$query);
			  
			  $a = mysqli_fetch_array($result);
			  
			  


?>




            
            
            
            
            
            
            <div class="container">    
                <div class="row">
                    <div class="span4">

						<div class="team-member">
                        	
                            <div class="team-member-preview">
                            
                            	<img src="content/team/360x295-1.jpg" alt="">                                                                
                            
                            </div><!-- end .team-member-preview -->
                            
                            <div class="team-member-description">
                            
                                <h7>MR.Rajiv Mundra</h7>
                                <h5>DIRECTOR</h5>
                                <h4>Aarti Group</h4>

                            
                            </div><!-- end .team-member-description -->
                            
                        </div><!-- end .team-member -->
                    
                    </div><!-- end .span4 -->
                    <div class="span4">

						<div class="team-member">
                        	
                            <div class="team-member-preview">
                            
                            	<img src="content/team/360x295-2.jpg" alt="">                                                                
                            
                            </div><!-- end .team-member-preview -->
                            
                            <div class="team-member-description">
                            
                                <h7>Mr.Reebhu Raj Agrawal</h7>
                                <h5>DIRECTOR</h5>
                                <h4>Aarti Group</h4>
                            
                            </div><!-- end .team-member-description -->
                            
                        </div><!-- end .team-member -->
                    
                    </div><!-- end .span4 -->
                    <div class="span4">

						<!--<div class="team-member">
                        	
                            <div class="team-member-preview">
                            
                            	<img src="content/team/360x295-3.jpg" alt="">                                                                
                            
                            </div>
                            
                            <div class="team-member-description">
                            
                                <h7>Mr.Aditya Mundra</h7>
                                <h5>DIRECTOR</h5>
                                <h4>Aarti Group</h4>
                            
                            </div>
                            
                        </div>-->
                    <!--<div class="team-member">
                        	
                            <div class="team-member-preview">
                            
                            	<img src="content/team/360x295-3.jpg" alt="">                                                                
                            
                            </div>
                            
                            <div class="team-member-description">
                            
                                <h7>Mr.Ashok Mundra</h7>
                                <h5>DIRECTOR</h5>
                                <h4>Aarti Group</h4>
                            
                            </div>
                            
                        </div>-->
                    
                    </div><!-- end .span4 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
           <div class="container">
            	<div class="row">
                	<div class="span12">
                    	
                        <?php echo $a[2]; ?>                         
                        
                        <br>
                              
                    </div><!-- end .span7 -->
                   
                </div><!-- end .row -->
            </div><!-- end .container --> 
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    
</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:55:34 GMT -->
</html>