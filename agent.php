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

                            <h2>AGENT CORNER</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h6>AGENT</h6>
                            
                            <h3>CORNER</h3>
                            
                        </div><!-- end .headline -->
                    
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            <div class="container" style="padding-bottom: 80px;">
            	<div class="row">
                    <div class="span5">
                    	
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
								<input type="hidden" name="fromWhere" value="Agent Contact">
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
                    </div><!-- end .span7 -->
					<br>
					<br>
					<br>
                	<div class="span6" >
                    	
                        <img src="\Aarti\assets\images\agent.png" style="margin-left:190px" width="50%" height="50%"  >
                        <p style="padding-top: 15px; color:blue;margin-left:240px">Welcome to Aarti Group</p>
                        
                    </div><!-- end .span7 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    
</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:55:34 GMT -->
</html>