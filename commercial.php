<?php

session_start();

if(!isset($_SESSION['first_time'])) {
header('location: index2.php');
exit();
}


      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  


?>

<?php include 'header2.php'; ?>


		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</br>
		</br>
			<div class="row">
                    <div class="span12">
						<div class="headline" style="margin-bottom:20px;">
                            <h3 style="color:#800080">Commercial Projects</h3>
                        </div><!-- end .headline -->
                    </div><!-- end .span12 -->
                </div><!-- end .row --> 
				<div class="portfolio-grid four-cols portfolio-isotope">
            	
                <div class="item term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/Ashoka Plaza.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:315px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom " href="#">
                                        
										<p>Ashoka Plaza</P>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                        
        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
                
                <div class="item term-1 term-3">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/Ashoka Millenium.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:315px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom " href="#">
                                        <p>Ashoka Millenium</p>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                       
        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
                
                <div class="item term-1 term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/images.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:315px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom"    href="Residential.php"
                                        <p>More coming..</p>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                        
        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
            </div><!-- end .portfolio-grid -->
            </div><!-- end .portfolio-grid -->			
          </div><!-- end .container -->				
		
        <?php include 'footer.php'; ?>
    
    
    
    

</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:45:48 GMT -->
</html>