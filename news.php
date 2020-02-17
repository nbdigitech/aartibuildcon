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

                            <h2>News & updates</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            	<div class="row">
                
                <?php
						
        
		
		                     if(isset($_GET['cur']))
							 { 
							    $cur = $_GET['cur']*12;
								$vv = $_GET['cur'];
						     } else { $cur = 0; $vv=0; }
		
			   
			                 $query = " SELECT * FROM news123  ORDER BY id DESC LIMIT $cur,12 ";
			                 $result = mysqli_query($dbc,$query);
						
						     if( mysqli_num_rows($result) > 0 )
							 {
							    while( $a = mysqli_fetch_array($result) )
								{
						
						?>
                
                
                	<div class="span12" style=" margin-top: 15px; padding-top: 10px;">
                            <div style="font-size: 32px; color: #0099FF; font-weight: 100;"><span><img src="content/news/jixodo4xT.png" height="30" width="30"></span> <?php echo $a[1]; ?></div>
                            <p style="margin-top: 8px;"><?php echo $a[2]; ?></p>
                    </div>
                    
                   <?php } } ?> 
            	</div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            <?php 
			
			          $query = " SELECT * FROM news123 ";
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