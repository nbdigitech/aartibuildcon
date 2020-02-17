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

                            <h2>NRI CORNER</h2>
                        
						</div><!-- end .span12 -->
					</div><!-- end .row -->
				</div><!-- end .container -->
				
			</div><!-- end #page-header -->
            
            
            
            <div class="container" style="padding-bottom: 80px;">
            	<div class="row">
                
                	<div class="span6" style="position: relative;top: -1px;left:0px;  padding:0px 0px 0px 5px;border: 2px solid #4B0082;">
                    	
                        <h2 style="background-color:#00CED1;padding:0px 0px 0px 5px;">Dear NRI Investor,</h2>
                        <p>
						If you are looking to invest in property in Chhattisgarh, than you are on the right page.

Aarti Group believes in timely delivery of their projects equipped with quality construction. This is possible only because of sheer passion and great execution capabilities.
</P>
We aim to achieve perfection in our commitment to customer, client and organization.
<P>
In our journey of 26 years, as an organization we have gained strong belief that our client trusts for quality, reliability and integrity because we respect business ethics. We give environment where people want to work, stay and grow in a community feeling.

At Aarti, we have a special team of people to take care of the requirements of our NRI clients, be it selection of the right home/space according to their needs, documentation process and banking transactions.
</p>
<p>
All our NRI clients are happy with our Post sales services like- Regular construction updates through emails with actual visuals, reminding of EMI schedule, etc which helped them in Making Life Better

In India, property prices have appreciated significantly over the past years. This has made investments in India's real estate sector more affordable and extremely lucrative for overseas investors.
</p>
<p>
The RBI's regulations on Real estate are fairly easy as well and NRI’s do not have to take any prior permission from the authorities. An NRI or Person of Indian Origin (PIO) can own both residential as well as commercial properties in India and there is no restriction on the number of properties you can buy.

We would be happy to answer your queries related to property investment in Chhattisgarh & options available suitable to your needs.
</P>
<p>
You are heartily invited to be Part of Growing Aarti Family!!
						</p>
                        
                    </div><!-- end .span7 -->
					    <div class="span6" style="padding:0px 20px 30px 20px;">
                    	
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
                               <input class="span12" type="text" id="city" name="city" value="" placeholder="Country Name"> 
                                </p>
								<input type="hidden" name="fromWhere" value="NRI Contact">
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
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        
        <?php include 'footer.php'; ?>	
    
    
</body>

<!-- Mirrored from bitpublimedia.ro/themeforest/sfera-html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 19:55:34 GMT -->
</html>