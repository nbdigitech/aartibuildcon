<?php

session_start();

if(!isset($_SESSION['first_time'])) {
header('location: index2.php');
exit();
}


      ini_set('max_execution_time', 3000);
	  
      include 'mot/database.php';
	  


?>

<?php include 'header.php'; ?>


		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	
						<div class="fullwidthbanner-container slider-revolution" style="margin-bottom:-30px;">
				<div class="fullwidthbanner">
					<ul>					   						                        
						    <li data-transition="fade">
						
                            <img src="content/search/slider1.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                                
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                
                            </div>
                            
                        </li>
						   			    <li data-transition="fade">
						
                            <img src="content/search/slider2.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                           
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                <font size=3></font>
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                             
                            </div>
                            
                        </li>
						   			    <li data-transition="fade">
						
                            <img src="content/search/slider3.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                             
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                 

                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                              
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                 <a class="btn" href="#">Contact</a>
                            </div>
                            
                        </li>
						   			    <li data-transition="fade">
						
                            <img src="content/search/slider4.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                              
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                <font size=3></font>
                            </div>
                            
                            <div class="caption text sft" style="color:cyan"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                        </li>
						   			    <li data-transition="fade">
						
                            <img src="content/search/slider5.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 It’s time
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
<font size=3></font>
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                        </li>
						    			    <li data-transition="fade">
						
                            <img src="content/search/slider6.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 It’s time
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                <font size=3></font>
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                
                            </div>
                            
                        </li>

			
			   			    <li data-transition="fade">
						
                            <img src="content/search/slider7.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 It’s time
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                <font size=3></font>
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                        </li>
                        <li data-transition="fade">
						
                            <img src="content/search/slider8.jpg" alt="">
                            
                            <div class="caption fade"
                                 data-x="600"
                                 data-y="-100"
                                 data-speed="1200"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 
                            </div>
                            
                            <div class="caption subtitle sfl"
                                 data-x="50"
                                 data-y="410"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 It’s time
                            </div>
                            
                            <div class="caption title sfl" style="color:cyan"
                                 data-x="50"
                                 data-y="450"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="easeOutExpo">
                                 <font size=3></font>
                            </div>
                            
                            <div class="caption text sft" style="color:CYAN"
                                 data-x="50"
                                 data-y="500"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutExpo">
                               
                            </div>
                            
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="560"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutExpo">
                            
                            </div>
                            
                        </li>
                       
      </ul>
                </div><!-- end .fullwidthbanner -->
            </div><!-- end .fullwidthbanner-container -->
			<br>
			<br>
		
	           	<div class="row">
                    <div class="span12">
						<div class="headline" style="margin-bottom:20px;">
                            <h3 style="color:#161616">Ongoing Project</h3>
                        </div><!-- end .headline -->
                    </div><!-- end .span12 -->
                </div><!-- end .row --> 
				<div class="portfolio-grid four-cols portfolio-isotope" style="margin-left:2px">
            	
                <div class="item term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview" style="width:445px" >			
                        
                            <div class="images-slider"">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/ASHOKA IKON PHASE -20.jpg" alt="">
                                        </li>
                                        <li>
                                        	<img src="Abhi_images/ASHOKA IKON PHASE -I7.jpg" alt="">
                                        </li>
                                        <li>
                                        
											<img src="Abhi_images/Ashoka Ikon Phase-14.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:300px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom " href="project.php?id=38">
                                        
										<p><font size="3">ASHOKA IKON-
A UNIQUE PROJECT OF 101 ROW HOUSES</font></P>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                        
        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
                
                <div class="item term-1 term-3" >
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview" style="width:445px" >			
                        
                            <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/Ashoka Impression0.png" alt="">
                                        </li>
                                        <li>
                                        	<img src="Abhi_images/Ashoka Impression2.jpg" alt="">
                                        </li>
                                        <li>
                                        
											<img src="Abhi_images/Ashoka Impression6.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:300px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom"    href="project.php?id=39">
                                        <p><font size="3">ASHOKA IMPRESSION-
1,2 & 3 BHK FLATS</font></p>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                       
        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .item -->
                
                <div class="item term-1 term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview"style="width:445px">			
                        
                            <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        		<img src="Abhi_images/Ashoka Palm Meadows0.jpg" alt="">
                                        </li>
                                        <li>
                                        	<img src="Abhi_images/Ashoka Palm Meadows2.jpg" alt="">
                                        </li>
                                        <li>
                                        
											<img src="Abhi_images/Ashoka Palm Meadows3.jpg" alt="">
                                        </li>
                                    </ul>
                                    
                                </div><!-- end .images-slider -->
                            
                            <div class="portfolio-item-overlay" style="height:300px">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom"    href="project.php?id=36">
                                        <p><font size="3">ASHOKA PALM MEADOWS -
2 & 3 BHK FLATS
4 & 5 BHK BUNGALOW</font></p>
                                    </a>

                                </div><!-- end .portfolio-item-overlay-actions -->
                            
                            </div><!-- end .portfolio-item-overlay -->
                        
                        </div><!-- end .portfolio-item-preview -->
                        
                        
        
                    </div><!-- end .portfolio-item -->
                    <a class="btn" href="Residential.php" style=" position: relative;
    left: 200px;
   ">Click to See All</a>
                </div><!-- end .item -->
            </div><!-- end .portfolio-grid -->
						
				
				<div class="headline" >
                                
                                    
                                    <h1>Choose Aarti</h1>
                                	
                </div><!-- end .headline -->
				<div class="fullwidth-section parallax parallax-enabled" id="bg-3" style="background-position: 49% 58px;margin-top:-70px">
                <div class="fullwidth-section-content">
                    <div class="container ">
                    	<div class="row">
							<div class="span6">
                            	
                                <font style=" font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: black;
                                          line-height: 1.8em;">
                                         <center><font style=" letter-spacing: 1px;">
                                         ENQUIRY </font></center></font>
                                         </div><br>
                                         
                                         <div style="float: left; width: 90%; margin-left: 5%; margin-top: 20px;">
						<form name="contact" method="post" action="contact.php" enctype="multipart/form-data">  
                            <fieldset>
                                <div id="formstatus"></div>
                                <p>
                                    <input class="span6" type="text" id="name" name="nam" value="" placeholder="Name">
                                </p>
                                <p>
                                    <input class="span6" type="text" id="subject" name="sub" value="" placeholder="Subject">
                                </p>
                                <p>
                                   <input class="span6" type="text" id="email" name="ema" value="" placeholder="Email"> 
                                </p>
								<p>
                               <input class="span6" type="text" id="phone" name="phone" value="" placeholder="Mobile Number"> 
                                </p>
								<p>
                               <input class="span6" type="text" id="city" name="city" value="" placeholder="Your City Name"> 
                                </p>
								<input type="hidden" name="fromWhere" value="customer_Contact">
                                <p>
                                    <textarea class="span6" id="message" name="mes" rows="2" cols="25" placeholder="Message"></textarea>
                                </p>
                                <p class="last">
                   <input class="btn"  id="submit" type="submit" name="submit" value="Submit" >
                                </p>
                            </fieldset>
                        </form><!-- end #contact-form -->
                                
                            </div><!-- end .span6 -->
                        	<div class="span6" style="margin-top:-400px; margin-left:600px">	
                                <p style="color:black">The Ashoka Group is a leading real estate developer in India. The group has over 224 million sq. ft. of existing development and 748 million sq. ft. of planned projects. Ashoka is committed to quality, trust and customer sensitivity, and deliver on promises with agility, financial prudence and in tune with the highest global standards. The company has also entered into several strategic alliances with global industry leaders. </p>
                                
                                <br>
                                
                                <a class="btn" href="about.php">Read more</a>
                                
                            </div><!-- end .span6 -->
                        </div><!-- end .row -->
                    </div><!-- end .container -->
					
					</div>
					</div>
						<div class="headline" style="margin-top:-50px;" id="hland" >
                            <h3 >Our LandMark</h3> 
						</div> 
						<div class="row" style="margin-top:-80px" id="landmarks" >
                            <div class="span4 ">
                            
                                <img src="Abhi_images/Ashoka Plaza0.jpg" alt="">
                            </div><!-- end .span3 -->
                             <div class="span4">                         	
                                    <img src="Abhi_images/Circuit House0.jpg" alt="">
                            </div><!-- end .span3 -->
							<div class="span4">
                            
                                <img src="Abhi_images/Ashoka Millenium.jpg" alt="">
                            </div><!-- end .span3 -->
                        </div><!-- end .row -->
                        
<div class="row" style="margin-top:-80px" id="landmarks" >
                            <div class="span4 ">
                            
                                <center><b><p style="color:black" >Ashoka Plaza</p></b></center>
                            </div><!-- end .span3 -->
                             <div class="span4">                         	
                                   <center> <b><p style="color:black">Circuit House</p></b></center>
                            </div><!-- end .span3 -->
				<div class="span4">
                            
                              <center> <p style="color:black" > <b>Ashoka Millenium</b></p></center>
                            </div><!-- end .span3 -->
                        </div><!-- end .row -->








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
    
    
    <script>
				 
							$(document).ready(function(){
                        $("#h336").click(function() {
                           $("#dft").fadeOut(1000);
						  
                        });
                      });
				 
				
				 
    </script>	
    
	<script>
$(document).ready( function() {
    var height = $(window).height();
    var width = $(window).width();
	if(height<500||width<800)
	{
		$("#landmarks").hide();
		$("#hland").hide();
	}
	else
	{
		$("#landmarks").show();
		$("#hland").show();
	}
});
</script>
    

</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:45:48 GMT -->
</html>