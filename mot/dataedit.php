<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>


<?php

      ini_set('max_execution_time', 3000);
	  
      include 'database.php';
	  



?>









<?php

        
		  
		  
		  $id = $_GET['id'];
		  
		  



     if(isset($_POST['submit'])){    

         if( !empty($_POST['nam']) && isset($_POST['bhk']) && !empty($_POST['abo']) 
		 && !empty($_POST['sta']) && !empty($_POST['lat']) && !empty($_POST['lon']) && !empty($_POST['des']) && !empty($_POST['spe'])
		  && !empty($_POST['ame']) )
	     { 
		 
		 
		 
 
          $nam = mysqli_real_escape_string($dbc,trim($_POST['nam']));
          $abo = mysqli_real_escape_string($dbc,trim($_POST['abo']));
		  $abo = str_replace("background-color: rgb(247, 247, 247)","",$abo);
		  $abo = str_replace("http://www.aartiinfrabuild.com/images/arrow-blue.png","image/arrow-blue.png",$abo);
		  $sta = mysqli_real_escape_string($dbc,trim($_POST['sta']));
		  $lat = mysqli_real_escape_string($dbc,trim($_POST['lat']));
		  $lon = mysqli_real_escape_string($dbc,trim($_POST['lon']));
		  $des = mysqli_real_escape_string($dbc,trim($_POST['des']));
		  $spe = mysqli_real_escape_string($dbc,trim($_POST['spe']));
		  $spe = str_replace("background-color: rgb(247, 247, 247)","",$spe);
		  $spe = str_replace("http://www.aartiinfrabuild.com/images/arrow-blue.png","image/arrow-blue.png",$spe);
		  $ame = mysqli_real_escape_string($dbc,trim($_POST['ame']));
		  $ame = str_replace("background-color: rgb(247, 247, 247)","",$ame);
		  $ame = str_replace("http://www.aartiinfrabuild.com/images/arrow-blue.png","image/arrow-blue.png",$ame);
		  
		  $t[0]=0;
          $t[1]=0;
          $t[2]=0;
		  $t[3]=0;
		  $t[4]=0;
		  $t[5]=0;
		  
		  $addd = '';
		  if(isset($_POST['addd']))
	      {
		 
                                  foreach( $_POST['addd'] as $i )
	                                { 
                 					    $addd = $addd.' '.$i;  	 	 	 
                                    }
		  }
		  
		  
		  
		  define('GW_UPLOADPATH','image/');


          if(isset($_POST['bhk']))
	       {
		 
              foreach( $_POST['bhk'] as $i )
	            {
                   if($i=='1 BHK')
				     {  $t[0] = 1;  }
				   if($i=='2 BHK')
				     {  $t[1] = 1;  }
				   if($i=='3 BHK')
				     {  $t[2] = 1;  }
				   if($i=='4 BHK')
				     {  $t[3] = 1;  }
				   if($i=='5 BHK')
				     {  $t[4] = 1;  }
				   if($i=='6 BHK')
				     {  $t[5] = 1;  }	 	 	 
                 }
			}
		
		
		
			
			   
			   
			  
			   
			   $query = "UPDATE data123 SET nam= '$nam', abo= '$abo', sta= '$sta', 1bhk= '$t[0]', 2bhk= '$t[1]', 3bhk= '$t[2]', 4bhk= '$t[3]', 5bhk= '$t[4]', 6bhk= '$t[5]', lat= '$lat', lon= '$lon', des= '$des', spe= '$spe', ame= '$ame', addd= '$addd'  WHERE id= '$id' LIMIT 1";
		 
		        $result = mysqli_query($dbc,$query);  	 

 
               echo 'updated successfully -->';
 
           }
           else echo 'incomplete form, please go back to fill all details';

      }
	  
	  
	  
	  
	  
	  
	  
	  $query = "SELECT * FROM data123 WHERE id= '$id'";
		  
		  $result = mysqli_query($dbc,$query);
		  
		  $a = mysqli_fetch_array($result);
	  
	  
	  
	  
	  
	  

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="jwysiwyg/help/lib/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="jwysiwyg/help/lib/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="../lib/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="jwysiwyg/jquery.wysiwyg.css" type="text/css"/>
<script type="text/javascript" src="jwysiwyg/help/lib/jquery.js"></script>
<script type="text/javascript" src="jwysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.table.js"></script>
<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		$('.wysiwyg').wysiwyg({
		  controls: {
			bold          : { visible : true },
			italic        : { visible : true },
			underline     : { visible : true },
			strikeThrough : { visible : true },
			
			justifyLeft   : { visible : true },
			justifyCenter : { visible : true },
			justifyRight  : { visible : true },
			justifyFull   : { visible : true },

			indent  : { visible : true },
			outdent : { visible : true },

			subscript   : { visible : true },
			superscript : { visible : true },
			
			undo : { visible : true },
			redo : { visible : true },
			
			insertOrderedList    : { visible : true },
			insertUnorderedList  : { visible : true },
			insertHorizontalRule : { visible : true },

			h4: {
				visible: true,
				className: 'h4',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h4>' : 'h4',
				tags: ['h4'],
				tooltip: 'Header 4'
			},
			h5: {
				visible: true,
				className: 'h5',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h5>' : 'h5',
				tags: ['h5'],
				tooltip: 'Header 5'
			},
			h6: {
				visible: true,
				className: 'h6',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h6>' : 'h6',
				tags: ['h6'],
				tooltip: 'Header 6'
			},
			
			cut   : { visible : true },
			copy  : { visible : true },
			paste : { visible : true },
			html  : { visible: true },
			increaseFontSize : { visible : true },
			decreaseFontSize : { visible : true },
			exam_html: {
				exec: function() {
					this.insertHtml('<abbr title="exam">Jam</abbr>');
					return true;
				},
				visible: true
			}
		  },
		  events: {
			click: function(event) {
				if ($("#click-inform:checked").length > 0) {
					event.preventDefault();
					alert("You have clicked jWysiwyg content!");
				}
			}
		  }
		});

		$('#wysiwyg').wysiwyg("insertHtml", "Sample code");
	});
})(jQuery);
</script>
    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                    
                             <h3><a href="../update.php">Go back to  Update Page</a></h3><br><hr>
                    
                              
                             <form action="dataedit.php?id=<?php echo $a[0]; ?>" enctype="multipart/form-data" method="post">
                             
                             <h3>ABOUT US </h3> <br>
                             Name: <input type="text" name="nam" value="<?php echo $a[1]; ?>" > <br><br>
	                         About Us: <textarea class="wysiwyg" rows="5" name="abo" cols="103" ><?php echo $a[3]; ?></textarea> <br>
                             
                             Status: <select name="sta">
                                        <option <?php if($a[4]=='upcoming') echo 'selected="selected"'; ?> value="upcoming">upcoming</option>
                                        <option <?php if($a[4]=='current') echo 'selected="selected"'; ?> value="current">current</option>
                                        <option <?php if($a[4]=='completed') echo 'selected="selected"'; ?> value="completed">completed</option>
                                        <option <?php if($a[4]=='government') echo 'selected="selected"'; ?> value="government">government</option>
                                     </select>
                                     
                             <br>
                             
                             
                             
                             PLOT CATEGORY: <input type="checkbox" name="addd[]" value="PLOT"> PLOT  
                                                      <input type="checkbox" name="addd[]" value="FLAT"> FLAT  
                                                      <input type="checkbox" name="addd[]" value="BUNGLOW"> BUNGLOW            
                             
                             <br><br>
                             
                             
                             BHK avilable: <input <?php if($a[5]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="1 BHK"> 1 BHK  
                                           <input <?php if($a[6]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="2 BHK"> 2 BHK  
                                           <input <?php if($a[7]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="3 BHK"> 3 BHK
                                           <input <?php if($a[28]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="4 BHK"> 4 BHK
                                           <input <?php if($a[29]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="5 BHK"> 5 BHK
                                           <input <?php if($a[30]==1) echo 'checked="checked"'; ?> type="checkbox" name="bhk[]" value="6 BHK"> 6 BHK             
                             
                             <br><br><br><hr>
                             
                             <h3>LOCATION </h3> <br>
                             
                             Lattitude: <input type="text" name="lat" value="<?php echo $a[8]; ?>" > <br>
                             Longitude: <input type="text" name="lon" value="<?php echo $a[9]; ?>" ><br>
                             
                             <br><br><br><hr>
                             
                             <h3>LITTLE DISCRIPTION </h3> <br>
                             
                             Description: <input type="text" name="des" style="height: 120px; width: 600px;" value="<?php echo $a[10]; ?>" > <br>
                             
                             <br><br><br><hr>
                             
                             <h3>SPECIFICATION </h3> <br>
	                         Specification: <textarea class="wysiwyg" rows="5" name="spe" cols="103"><?php echo $a[11]; ?></textarea>
                             
                             <br><br><br><hr>
                             
                             <h3>AMENITIES </h3> <br>
	                         Amenities: <textarea class="wysiwyg" rows="5" name="ame" cols="103"><?php echo $a[12]; ?></textarea>
                             
                             <br><br><br><hr>
                             
                             <input type="submit" value="submit" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>