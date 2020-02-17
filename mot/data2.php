<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>

<?php

      ini_set('max_execution_time', 30000);
	  
      include 'database.php';
	  



?>




<?php


     if(isset($_POST['submit'])){    

         if( !empty($_POST['nam']) && isset($_POST['bhk']) && !empty($_FILES['hea']['tmp_name']) && !empty($_POST['abo']) 
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
			
			
			$down = '';
			if( !empty($_FILES['down']['tmp_name']) ){
			   $ext = pathinfo($_FILES['down']['name'], PATHINFO_EXTENSION);  	    
			   $down = $nam.'4.'.$ext;
			   $target = 'download/'.$down;
			   move_uploaded_file($_FILES['down']['tmp_name'],$target);
			}
		
		
		
		$pic_type=$_FILES['hea']['type'];
			   if( $pic_type=='image/png' )
			     { $ext = '.png'; }
			   if( $pic_type=='image/gif' )
				 { $ext = '.gif'; }
			   if( $pic_type=='image/jpg' )
				 { $ext = '.jpg'; }
			   if( $pic_type=='image/jpeg' )
				 { $ext = '.jpg'; }	 	 	 	    
			   $pic0 = $nam.'0'.$ext;
			   $target = GW_UPLOADPATH.$pic0;
			   move_uploaded_file($_FILES['hea']['tmp_name'],$target);
			   
			   
			   list($width, $height) = getimagesize($target);
		       $dst = imagecreatetruecolor(1000, 750);
		       if( $pic_type=='image/png' )
			     { $src = imagecreatefrompng($target);  }
			   if( $pic_type=='image/jif' )
			     { $src = imagecreatefromgif($target);  }
			   if( $pic_type=='image/jpg' )
			     { $src = imagecreatefromjpeg($target);  }
			   if( $pic_type=='image/jpeg' )
			     { $src = imagecreatefromjpeg($target);  }	   
		       	imagecopyresampled($dst, $src, 0, 0, 0, 0,1000, 750, $width, $height);
		       imagejpeg($dst, $target, 75);
		       imagedestroy($dst);	
			   
			   
			   $query = "INSERT INTO data123 (nam,hea,abo,sta,1bhk,2bhk,3bhk,4bhk,5bhk,6bhk,lat,lon,des,spe,ame,addd,down)".
               "value('$nam','$pic0','$abo','$sta','$t[0]','$t[1]','$t[2]','$t[3]','$t[4]','$t[5]','$lat','$lon','$des','$spe','$ame','$addd','$down')";
		 
		        $result = mysqli_query($dbc,$query);  	 

 
               echo 'updated successfully -->';
 
           }
           else echo 'incomplete form, please go back to fill all details';

      }

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
		$('#wysiwyg').wysiwyg({
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
                    
                              
                             <form action="data3.php?nam=<?php echo $nam; ?>" enctype="multipart/form-data" method="post">
                             
                             <h3>Gallery </h3> <br>
                              Pic 1: <input type="file" name="pic1" > <br>
                              Pic 2: <input type="file" name="pic2" > <br>
                              Pic 3: <input type="file" name="pic3" > <br>
	                         
                             
                             <br><br><br><hr>
                             
                             <input type="submit" value="NEXT" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>