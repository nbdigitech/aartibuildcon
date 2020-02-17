<?php

      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  



?>

<?php include 'header2.php'; ?>

		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="fullwidthbanner-container slider-revolution"  style="margin-top: 30px;">
				<div class="fullwidthbanner">
					<ul style="position: absolute; z-index: 101;">					   						                        
						
						
                       
                        <li data-transition="fade">
						
                            <img src="content/search/slider1.jpg" alt="">
                                                                                    
                            
                        </li>					   						                        
						<li data-transition="fade">
						
                            <img src="content/search/slider2.jpg" alt="">
                            
                        
                        </li> 
                        <li data-transition="fade">
						
                            <img src="content/search/slider3.jpg" alt="">
                            
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider4.jpg" alt="">
                                                                                    
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider5.jpg" alt="">
                                                                                    
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider6.jpg" alt="">
                            
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider7.jpg" alt="">
                                                                                    
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider8.jpg" alt="">
                                                                                    
                            
                        </li>              
                    </ul>
                    
                    <div style="position: absolute; z-index: 101; width: 100%">
                          
                          
                                   <center><div style="width: 100%; margin-top: 20%; margin-bottom: 5%; font-size: 350%; color: #FFFFFF;">FIND YOUR NEW HOME HERE</div></center>
                          
                                   <div style="width: 100%; margin-left: 15%; float: left;">
                                    
                                        <center><form action="search.php" enctype="multipart/form-data" method="post">
                                        
                                          <a href="javascript:;"><div id="xx6" style=" width: 29%; height: 40px; background-color: #fff;
                                            float: left; 
                                           padding-top: 10px; border-left: 1px solid #E6E6E6; margin-top: 15px">PLOT CATEGORY <span class="caret">
                                           </span></div></a>
                                           <a href="javascript:;"><div id="xx2" style=" width: 29%; height: 40px; background-color: #fff;
                                            float: left; 
                                           padding-top: 10px; border-left: 1px solid #E6E6E6; margin-top: 15px">BHK <span class="caret">
                                           </span></div></a>
                                           <center><div><input type="submit" name="submit" value="SEARCH" style=" outline:none;
                                             text-align: center; background-color: #1fdac6; border: 0px; 
                                            font-stretch: extra-expanded; color: white; float: left; width: 150px; height: 50px; 
                                            -moz-border-radius: 0px;  border-radius:  0px; -webkit-border-radius: 0px; margin-top: 15px; 
                                             padding-top: 10px;  cursor: pointer; display: inline-block; position: relative;"/></div></center>
                                        
                                        
                                        </center>
                               
                                   </div>
                                   
                                   <center><div style="width: 100%; margin-left: 12%; float: left;">
                                   
                                                <div id="xx8" style=" display: none;">
                                                <div id="xx7" style="float:left; margin-left: 3%; width: 29%; background-color: #FFFFFF;
                                                padding-top: 10px; padding-bottom: 10px; display: none; text-align: left;">
                                                      <input type="checkbox" name="addd[]" value="PLOT" style="margin-left: 38%;"> PLOT<br>
                                                      <input type="checkbox" name="addd[]" value="FLAT" style="margin-left: 38%;"> FLAT <br>
                                                    <input type="checkbox" name="addd[]" value="BUNGLOW" style="margin-left: 38%;"> BUNGLOW <br>
                                                </div>
                                                </div>
                                                
                                                
                                                <div id="xx5" style="display: none;">
                                                <div id="xx4" style="float:left; margin-left: 32%; width: 29%; background-color: #FFFFFF;
                                                padding-top: 10px; padding-bottom: 10px; display: none;">
                                                      <input type="checkbox" name="bhk[]" value="1 BHK"> 1 BHK <br>
                                                      <input type="checkbox" name="bhk[]" value="2 BHK"> 2 BHK <br>
                                                      <input type="checkbox" name="bhk[]" value="3 BHK"> 3 BHK <br>
                                                      <input type="checkbox" name="bhk[]" value="4 BHK"> 4 BHK <br>
                                                      <input type="checkbox" name="bhk[]" value="5 BHK"> 5 BHK <br>
                                                      <input type="checkbox" name="bhk[]" value="6 BHK"> 6 BHK <br>
                                                </div>
                                                </div>
                                   
                                   </div></center>
                                       
                    </div>
                    
                    
                </div><!-- end .fullwidthbanner -->
            </div><!-- end .fullwidthbanner-container -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h6>AARTI</h6>
                            
                            <h3>SEarch Result</h3>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    
                    	<div class="portfolio-grid three-cols gutter">
                        	
                        <?php
						
        
		                     $t = ' ';
		
		                     if(isset($_POST['bhk']))
	                          {
		 
                                  foreach( $_POST['bhk'] as $i )
	                                { 
                 					  if($i=='1 BHK')
				  					   {  $t = $t.' 1bhk= 1 OR';   }
				  				      if($i=='2 BHK')
				                       {  $t = $t.' 2bhk= 1 OR';  }
				                      if($i=='3 BHK')
				                       {  $t = $t.' 3bhk= 1 OR';  }
				                      if($i=='4 BHK')
				                       {  $t = $t.' 4bhk= 1 OR';  }
				                      if($i=='5 BHK')
				                       {  $t = $t.' 5bhk= 1 OR';  }
				                      if($i=='6 BHK')
				                       {  $t = $t.' 6bhk= 1 OR';  }	 	 	 
                                     }
			                  }
							  
							  $tt = substr($t, 0, -2);
		
		                      
							  ////////////////////////////////////////////////////////////////////////////////////
							  
							 
							 $title = '';
							 
							 if(isset($_POST['addd']))
	                          {
		 
                                  foreach( $_POST['addd'] as $i )
	                                { 
                 					    $title = $title.' '.$i;  	 	 	 
                                    }
			                  }
							 
							  
							 $xx = '';
							 
							 
							 $search_words = explode(' ',$title);
			
			                 $words = array();
			
			                 foreach($search_words as $final_search)
			                  {
			                     if(!empty($final_search)) {
				     
					                                  $xx = $xx.' addd LIKE \'%'.$final_search.'%\' OR';
				                    }
		                      }
							  
							  
							  $xx = substr($xx, 0, -2);    
							  
							  
							  
							  //////////////////////////////////////////////////////////////////////////////////////
							  
							  if( !isset($_POST['addd']) &&  !isset($_POST['bhk'])	){				
                                    $query = "SELECT * FROM data123 WHERE addd= 'xxxxxxxxx'";
	                           }
							  if( !isset($_POST['addd']) &&  isset($_POST['bhk'])	){
	                               $query = "SELECT * FROM data123 WHERE ". $tt;
	                           }
	                          if( isset($_POST['addd']) &&  !isset($_POST['bhk'])	){
	                               $query = "SELECT * FROM data123 WHERE ". $xx;
	                           }
	                          if( isset($_POST['addd']) &&  isset($_POST['bhk'])	){				
                                    $query = "SELECT * FROM data123 WHERE ( ". $xx ." ) AND ( " . $tt." )";
	                           }
							  
							   
			   
			                 $result = mysqli_query($dbc,$query);
						
						     if( mysqli_num_rows($result) > 0 )
							 {
							    while( $a = mysqli_fetch_array($result) )
								{
						
						?>    
                            
                            
                            <div class="item">
                            	
                                <div class="portfolio-item">
                    
                                    <div class="portfolio-item-preview">			
                                    
                                        <img src="mot/image/<?php echo $a[2]; ?>" height="340" width="340" alt="">
                                        
                                        <div class="portfolio-item-overlay">                                                                                                                                    
                                                                                                                                    
                                            <div class="portfolio-item-overlay-actions">                                                                                                
                                                
                                                <a class="portfolio-item-zoom " href="project.php?id=<?php echo $a[0]; ?>">
                                                    <i class="ifc-zoom_in"></i>
                                                </a>
            
                                            </div><!-- end .portfolio-item-overlay-actions -->
                                        
                                        </div><!-- end .portfolio-item-overlay -->
                                    
                                    </div><!-- end .portfolio-item-preview --> 
                                    
                                    <div class="portfolio-item-description">
                                    
                                        
                                        
                                        <h3><a href="project.php?id=<?php echo $a[0]; ?>" style="text-decoration: none;"><?php echo $a[1]; ?></a></h3>
                                    
                                    </div><!-- end .portfolio-item-description -->                                                                       
                    
                                </div><!-- end .portfolio-item -->
                                
                            </div><!-- end .item -->
                            
                            <?php } } ?>
                            
                            
                            
                            
                        </div><!-- portfolio-grid -->
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
            
            
            
            
            
            
            
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>
    
    
    <script>
	
          $(document).ready(function(){
             $("#xx2").click(function() {
                 
				 $("#xx7").fadeOut(0);
				 $("#xx8").fadeOut(0);
				 $("#xx4").fadeToggle(250);
				 $("#xx5").slideToggle(250);

             });
			 $("#xx6").click(function() {
                 
				 $("#xx4").fadeOut(0);
				 $("#xx5").fadeOut(0);
				 $("#xx7").fadeToggle(250);
				 $("#xx8").slideToggle(250);

             });
          });
		  
		  
		  
    </script>	
    
    

</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:45:48 GMT -->
</html>