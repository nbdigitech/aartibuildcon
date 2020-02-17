



       var i = 0;
	   
	   
	   setInterval("lightning_one()",7000);
	   
	   
	   function lightning_one(t){
	   
	                 if( (i%2)==0 ){   
                          $("#xx3").fadeOut(500).addClass("hidden-md").addClass("hidden-lg");
					      $("#yy3").removeClass("hidden-md").removeClass("hidden-lg").fadeOut(0).fadeIn(1000);
						  
						  $("#xx4").fadeOut(500).addClass("hidden-sm");
						  $("#yy4").removeClass("hidden-sm").fadeOut(0).fadeIn(1000);
						  
						  $("#xx5").fadeOut(500).addClass("hidden-xs");
						  $("#yy5").removeClass("hidden-xs").fadeOut(0).fadeIn(1000);
					  }
					 
					 if( (i%2)==1 ){   
                          $("#yy3").fadeOut(500).addClass("hidden-md").addClass("hidden-lg");
					      $("#xx3").removeClass("hidden-md").removeClass("hidden-lg").fadeOut(0).fadeIn(1000);
						  
						  $("#yy4").fadeOut(500).addClass("hidden-sm");
						  $("#xx4").removeClass("hidden-sm").fadeOut(0).fadeIn(1000);
						  
						  $("#yy5").fadeOut(500).addClass("hidden-xs");
						  $("#xx5").removeClass("hidden-xs").fadeOut(0).fadeIn(1000);
					  } 
					 
					 i++;            
       };

	   
	
       $(document).ready(function(){
             $(".ss3").click(function() {
			         
					 if( (i%2)==0 ){   
                          $("#xx3").fadeOut(500).addClass("hidden-md").addClass("hidden-lg");
					      $("#yy3").removeClass("hidden-md").removeClass("hidden-lg").fadeOut(0).fadeIn(1000);
						  
						  $("#xx4").fadeOut(500).addClass("hidden-sm");
						  $("#yy4").removeClass("hidden-sm").fadeOut(0).fadeIn(1000);
						  
						  $("#xx5").fadeOut(500).addClass("hidden-xs");
						  $("#yy5").removeClass("hidden-xs").fadeOut(0).fadeIn(1000);
					  }
					 
					 if( (i%2)==1 ){   
                          $("#yy3").fadeOut(500).addClass("hidden-md").addClass("hidden-lg");
					      $("#xx3").removeClass("hidden-md").removeClass("hidden-lg").fadeOut(0).fadeIn(1000);
						  
						  $("#yy4").fadeOut(500).addClass("hidden-sm");
						  $("#xx4").removeClass("hidden-sm").fadeOut(0).fadeIn(1000);
						  
						  $("#yy5").fadeOut(500).addClass("hidden-xs");
						  $("#xx5").removeClass("hidden-xs").fadeOut(0).fadeIn(1000);
					  } 
					 
					 i++; 
                     
             });
			 
			 
      });
	   
	   
	   
	   
	   
	   
	   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	   
	   
	       /*           if ( $(window).width() >= 1200 ) {
                                   $("#midx").animate({ height: "570px" });
								   $("#midx2").animate({ height: "570px" });
					  }
					  
					  else if ( $(window).width() >= 992 && $(window).width() < 1200 ) {
                                   $("#midx").animate({ height: "470px" });
								   $("#midx2").animate({ height: "470px" });
					  }
					 
					  
					  else if ( $(window).width() >= 768 && $(window).width() < 992 ) {
                                   $("#midx").animate({ height: "420px" });
								   $("#midx2").animate({ height: "420px" });
					  }
					  
					  else if (  $(window).width() < 768 ) {
                                   $("#midx").animate({ height: "370px" });
								   $("#midx2").animate({ height: "370px" });
					  }
	   
	   
	   
	   
	   $(window).resize(function(){
									  
					
					if ( $(window).width() >= 1200 ) {
                                   $("#midx").animate({ height: "570px" });
								   $("#midx2").animate({ height: "570px" });
					  }
					  
					  else if ( $(window).width() >= 992 && $(window).width() < 1200 ) {
                                   $("#midx").animate({ height: "470px" });
								   $("#midx2").animate({ height: "470px" });
					  }
					  
					  
					  else if ( $(window).width() >= 768 && $(window).width() < 992 ) {
                                   $("#midx").animate({ height: "420px" });
								   $("#midx2").animate({ height: "420px" });
					  }
					  
					  else if (  $(window).width() < 768 ) {
                                   $("#midx").animate({ height: "370px" });
								   $("#midx2").animate({ height: "370px" });
					  }
	   
			
	    });
	   
	   
	   */
	   
	   
	   