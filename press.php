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

                            <h2>Press release</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
           
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    
                    	<div class="portfolio-grid three-cols gutter">
                        	
                        <?php
						
        
		
		                     if(isset($_GET['cur']))
							 { 
							    $cur = $_GET['cur']*12;
								$vv = $_GET['cur'];
						     } else { $cur = 0; $vv=0; } 
		
			   
			                 $query = " SELECT * FROM press123 ORDER BY id DESC LIMIT $cur,12 ";
			                 $result = mysqli_query($dbc,$query);
						
						     if( mysqli_num_rows($result) > 0 )
							 {
							    while( $a = mysqli_fetch_array($result) )
								{
						
						?>    
                            
                            
                            <div class="item">
                            	
                                <div class="portfolio-item">
                    
                                    <div class="portfolio-item-preview">			
                                    
                                        <img src="mot/image/<?php echo $a[1]; ?>" height="340" width="340" alt="">
                                        
                                        <div class="portfolio-item-overlay">                                                                                                                                    
                                                                                                                                    
                                            <div class="portfolio-item-overlay-actions">                                                                                                
                                                
                                                <a class="portfolio-item-zoom magnificPopup-gallery" href="mot/image/<?php echo $a[1]; ?>">
                                                    <i class="ifc-zoom_in"></i>
                                                </a>
            
                                            </div><!-- end .portfolio-item-overlay-actions -->
                                        
                                        </div><!-- end .portfolio-item-overlay -->
                                    
                                    </div><!-- end .portfolio-item-preview --> 
                                    
                                    <div class="portfolio-item-description">
                                    
                                        
                                        
                                        <h6><a href="javascript:;" style="text-decoration: none;"><?php echo $a[2]; ?></a></h6>
                                    
                                    </div><!-- end .portfolio-item-description -->                                                                       
                    
                                </div><!-- end .portfolio-item -->
                                
                            </div><!-- end .item -->
                            
                            <?php } } ?>
                            
                            
                            
                            
                        </div><!-- portfolio-grid -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <?php 
			
			          $query = " SELECT * FROM press123 ";
			          $result = mysqli_query($dbc,$query);
			
			          $aa =  mysqli_num_rows($result)/12;
			
			
			
			?> 
            
            <div class="container">
                <div class="row">
                    <div class="span12">
                        
                       <div class="portfolio-pagination">

							<div class="nav-links">
                            <?php
							     for($d=0; $d<$aa; $d++)
								  {
							?>    
								<a class="page-numbers <?php if($d==$vv) echo 'current'; ?>" href="press.php?cur=<?php echo $d; ?>"><?php echo $d+1; ?></a>
								
                            <?php
							       }
						    ?>		       
							</div><!-- end .nav-links -->
							
						</div><!-- end .portfolio-pagination -->
                    
                    </div><!-- end .span12 -->
            	</div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    

</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/portfolio-grid-gutter-titles.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 20:00:20 GMT -->
</html>