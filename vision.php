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

                            <h2>Vision & Mision</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            



<?php


     
 
          
		      
			  
              

              $query = " SELECT * FROM vision123 LIMIT 1";
		 
		      $result = mysqli_query($dbc,$query);
			  
			  $a = mysqli_fetch_array($result);
			  
			  


?>









            
            
            <div class="container">
            	<div class="row">
                	<div class="span7">
                    	
                        <?php echo $a[2]; ?>                         
                        
                        <br>
                        
                        
                        
                    </div><!-- end .span7 -->
                    <div class="span5">
                    	
                        <!--<img src="mot/image/<?php echo $a[1]; ?>" alt="">-->
                        
                    </div><!-- end .span5 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    
</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:55:34 GMT -->
</html>